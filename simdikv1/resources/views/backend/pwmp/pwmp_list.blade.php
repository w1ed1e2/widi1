@extends('templates.admin.layout')

@section('title')
    <h1>PWMP
        <small>- Penumbuhan Wirausaha Muda Pertanian</small>
    </h1>
@endsection

@section('breadcrumb')
    <li>
        <a href="index.html">Bid. Penyelenggaraan Pendidikan</a><i class="fa fa-circle"></i>
    </li>
    <li>
        <span>PWMP</span>
    </li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption caption-md">                        
                        <span class="caption-subject font-green-steel bold uppercase"><i class="fa fa-reorder"></i> Data PWMP</span>
                    </div>
                    <div class="actions">
                        <a href="{{ url('/admin/pwmp/create')}}" class="btn btn-circle btn-primary uppercase"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div>
                <div class="portlet-body">
                    @if(Session::has('msg'))
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            <i class="fa fa-info-circle"></i> {{ Session::get('msg') }}
                        </div>
                    @endif

                    @if ($pwmp->isEmpty())
                        <div class="alert alert-warning">
                            <p>Maaf, Data PWMP (Penumbuhan Wirausaha Muda Pertanian) masih kosong</p>
                        </div>
                    @else
                    <table class="table table-hover table-striped table-bordered" id="example">
                    	<thead>
                            <tr class="uppercase">
                                <th style="width:10px;"> No </th>
                                <th> Instansi </th>
                                <th> Nama Kelompok </th>
                                <th> Jenis Usaha</th>
                                <th style="width: 150px;"> Jumlah Bantuan </th>
                                <th style="width: 90px;"> Tgl Terima </th>
                                <th style="width: 70px;"> Aksi </th>
                            </tr>
                        </thead>
                        @foreach($pwmp as $idx=>$p)
                        <tr>
                        	<td style="text-align: right;">{{$idx+1}}</td>
                        	<td>{{$p->lembaga->title}}</td>
                        	<td>{{$p->kelompok}}</td>
                        	<td>{{$p->jenis_usaha}}</td>
                        	<td style="text-align: right;">{{number_format($p->jml_bantuan,2)}}</td>
                        	<td style="text-align: center;">{{$p->tgl_terima}}</td>
                        	<td>
                        		<div class="btn-group">
                                    <button type="button" class="btn default">Menu</button>
                                    <button type="button" class="btn default dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down"></i>
                                    </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a data-toggle="modal" href="#anggota"><i class="fa fa-user"></i> Anggota </a></li>
                                            <li><a data-toggle="modal" href="#progress"><i class="fa fa-refresh"></i> Perkembangan </a></li>
                                            <li>                                             
                                        </ul>
                                </div>

                                <div class="modal fade" id="anggota" tabindex="-1" role="basic" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <h4 class="modal-title"><i class="fa fa-user"></i> <strong>Daftar Anggota</strong></h4>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table table-hover table-bordered table-striped">
                                                    <thead>
                                                        <tr class="uppercase" style="background-color: #efefef">
                                                            <th style="width: 40px;">No</th>
                                                            <th>Nama Anggota</th>
                                                        </tr>
                                                    </thead>  
                                                    @foreach($p->anggota as $no=>$ag)
                                                    <tr>
                                                        <td>{{($no+1)}}</td>
                                                        <td>{{$ag->nama}}</td>
                                                    </tr>
                                                    @endforeach                                                    
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn red" data-dismiss="modal">Close</button>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="progress" tabindex="-1" role="basic" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <h4 class="modal-title"><i class="fa fa-refresh"></i> <strong>Perkembangan PWMP</strong></h4>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table table-hover table-bordered">
                                                    <thead>
                                                        <tr class="uppercase" style="background-color: #efefef">
                                                            <th style="width: 20px;">No</th>
                                                            <th style="width: 20px;">Tahun</th>
                                                            <th>Deskripsi</th>
                                                            <th style="width: 80px;">Tgl Input</th>
                                                        </tr>
                                                    </thead>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>2017</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>2017</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>2017</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>2017</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn red" data-dismiss="modal">Close</button>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        	</td>
                        </tr>
                        @endforeach
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
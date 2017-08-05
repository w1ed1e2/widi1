@extends('templates.admin.layout')

@section('title')
    <h1>Kelembagaan
        <small>- Data Lembaga</small>
    </h1>
@endsection

@section('breadcrumb')
    <li>
        <a href="index.html">Bid. Ketenagaan dan Kelembagaan</a><i class="fa fa-circle"></i>
    </li>
    <li>
        <span>Kelembagaan</span>
    </li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption caption-md">
                        <i class="fa fa-database"></i>
                        <span class="caption-subject font-green-steel bold uppercase">Kelembagaan</span>
                    </div>
                    <div class="actions">
                        <a href="" class="btn btn-circle btn-primary uppercase"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div>
                <div class="portlet-body">
                        @if ($lembaga->isEmpty())
                            <p>Tidak ada data lembaga.</p>
                         @else
                        <table class="table table-hover table-striped table-bordered" id="example">
                            <thead>
                                <tr class="uppercase">
                                    <th style="width:20px;"> No </th>
                                    <th> Nama Lembaga </th>
                                    <th style="width:20px;"> Jenis</th>
                                    <th style="width:60px;"> status </th>
                                    <th style="width:200px;"> Kep. Sekolah </th>
                                    <th style="width:200px;"> Pengelola </th>
                                    <th style="width:80px;"> Aksi </th>                                                                        
                                </tr>
                            </thead>
                            <?php $i = 0;?>
                            @foreach($lembaga as $rs)
                            <?php $i++;?>
                            <tr>
                                <td style="text-align: right;"> <?php echo $i;?>. </td>
                                <td> {{$rs->title}} </td>
                                <td> {{$rs->jenis}} </td>
                                <td> {{$rs->status}}</td>
                                <td> {{$rs->kepsek}}</td>
                                <td> {{$rs->pengelola}}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn default">Menu</button>
                                        <button type="button" class="btn default dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="javascript:;"><i class="fa fa-arrow-right"></i> Detail </a></li>
                                            <li><a href="javascript:;"><i class="fa fa-edit"></i> Edit </a></li>
                                            <li><a href="javascript:;"><i class="fa fa-remove"></i> Hapus </a></li>
                                        </ul>
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
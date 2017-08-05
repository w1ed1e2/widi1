@extends('templates.admin.layout')

@section('title')
    <h1>Ketenagaan
        <small>- Data Tenaga Pendidik dan Kependidikan</small>
    </h1>
@endsection

@section('breadcrumb')
    <li>
        <a href="index.html">Bid. Ketenagaan dan Kelembagaan</a><i class="fa fa-circle"></i>
    </li>
    <li>
        <span>Ketenagaan</span>
    </li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption caption-md">                        
                        <span class="caption-subject font-green-steel bold uppercase"><i class="fa fa-user"></i> Ketenagaan</span>
                    </div>
                    <div class="actions">
                        <a href="{{ url('/admin/tenaga/create')}}" class="btn btn-circle btn-primary uppercase"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div>
                <div class="portlet-body">
                        @if ($tenaga->isEmpty())
                            <p>Tidak ada data lembaga.</p>
                         @else
                        <table class="table table-hover table-striped table-bordered" id="example">
                            <thead>
                                <tr class="uppercase">
                                    <th style="width:20px;"> No </th>
                                    <th style="width:250px;"> Nama Pegawai </th>
                                    <th> Gelar </th>
                                    <th style="width:10px;"> JK</th>
                                    <th style="width:60px;"> Pendidikan </th>
                                    <th style="width:150px;"> Kepegawaian </th>
                                    <th style="width:150px;"> Jabatan </th>
                                    <th style="width:80px;"> Aksi </th>                                                                        
                                </tr>
                            </thead>
                            <?php $i = 0;?>
                            @foreach($tenaga as $rs)
                            <?php $i++;?>
                            <tr>
                                <td style="text-align: right;"> <?php echo $i;?>. </td>
                                <td> {{$rs->nama}}<br>
                                     @if ($rs->nip!='' && $rs->nip!='-')
                                        <small>NIP: {{$rs->nip}}</small>
                                     @else
                                        <small>NIP: - </small>
                                     @endif
                                </td>
                                <td> {{$rs->gelar}} </td>
                                <td style="text-align: center;"> {{$rs->jk}} </td>
                                <td> {{$rs->pendidikan}}</td>
                                <td> {{$rs->kepegawaian}}<br>
                                     <small>TMT: {{ \Carbon\Carbon::parse($rs->tmtKerja)->format('d/m/Y')}}</small>
                                </td>
                                <td> {{$rs->jabatan}}</td>
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
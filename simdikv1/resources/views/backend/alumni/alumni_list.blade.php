@extends('templates.admin.layout')

@section('title')
    <h1>Alumni
        <small>- Data Alumni</small>
    </h1>
@endsection

@section('breadcrumb')
    <li>
        <a href="index.html">Bid. Penyelenggaraan Pendidikan</a><i class="fa fa-circle"></i>
    </li>
    <li>
        <span>Alumni</span>
    </li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption caption-md">                        
                        <span class="caption-subject font-green-steel bold uppercase"><i class="fa fa-user"></i> Alumni</span>
                    </div>
                    <div class="actions">
                        <a href="{{ url('/admin/alumni/create')}}" class="btn btn-circle btn-primary uppercase"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div>                
                <div class="portlet-body">
                        @if ($alumni->isEmpty())
                            <div class="alert alert-warning">
                                <p>Maaf, Data Alumni masih kosong</p>
                            </div>
                        @else
                        <table class="table table-hover table-striped table-bordered" id="example">
                            <thead>
                                <tr class="uppercase">
                                    <th style="width:10px;"> No </th>
                                    <th> NIPD </th>
                                    <th> NISN </th>
                                    <th> Lembaga</th>
                                    <th> JK </th>
                                    <th> Thn. Masuk </th>
                                    <th> Thn. Lulus </th>
                                    <th> Aksi </th>                                                                        
                                </tr>
                            </thead>                            
                            <tr>
                                <td style="text-align: right;"></td>
                                <td></td>
                                <td>  </td>
                                <td style="text-align: center;">  </td>
                                <td> </td>
                                <td> 
                                     
                                </td>
                                <td> </td>
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
                        </table>                        
                        @endif
                </div>
            </div>
        </div>
    </div>
@endsection
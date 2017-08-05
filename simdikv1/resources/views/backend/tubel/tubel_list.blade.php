@extends('templates.admin.layout')

@section('title')
    <h1>Tugas Belajar
        <small>- Data Tugas Belajar</small>
    </h1>
@endsection

@section('breadcrumb')
    <li>
        <a href="index.html">Dashboard</a><i class="fa fa-circle"></i>
    </li>
    <li>
        <span>Tugas Belajar</span>
    </li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption caption-md">                        
                        <span class="caption-subject font-green-steel bold uppercase"><i class="fa fa-user"></i> Data Tugas Belajar</span>
                    </div>
                    <div class="actions">
                        <a href="{{ url('/admin/tubel/create')}}" class="btn btn-circle btn-primary uppercase"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div>
                <div class="portlet-body">
                    @if(Session::has('msg'))
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            <i class="fa fa-info-circle"></i> {{ Session::get('msg') }}
                        </div>
                    @endif

                    @if($tubel->isEmpty())
                    	<div class="alert alert-warning">
                            <p>Maaf, Data Tugas Belajar masih kosong</p>
                        </div>
                    @else
                    <table class="table table-hover table-striped table-bordered" id="example">
                    	<thead>
                            <tr class="uppercase">
                                <th style="width:20px;"> No </th>
                                <th> Nama</th>
                                <th> Unit Kerja</th>
                                <th> PT</th>
                                <th> Jenjang/Prodi</th>
                                <th style="width: 40px;"> Tahun</th>                                
                                <th style="width: 70px;"> Aksi </th>
                            </tr>
                        </thead>
                        @foreach($tubel as $i=>$tub)
                        <tr>
                        	<td style="text-align: right;">{{($i+1)}}</td>
                        	<td>{{$tub->nama}}</td>
                        	<td>{{$tub->unit}}</td>
                        	<td>{{$tub->pt}}</td>
                        	<td><strong>{{$tub->jenjang}}</strong><br>{{$tub->prodi}}</td>
                        	<td>{{$tub->tahun}}</td>
                        	<td>
                        		<div class="btn-group">
                                    <button type="button" class="btn btn-default">Menu</button>
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down"></i>
                                    </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="{{route('tubel.show',['id'=>$tub->id])}}"><i class="fa fa-arrow-right"></i> Detail Tubel </a></li>
                                            <li><a href="{{route('tubel.edit',['id'=>$tub->id])}}"><i class="fa fa-pencil"></i> Edit Data </a></li>
                                            <li>                                             
                                            <li><a href="#progress"><i class="fa fa-remove"></i> Hapus Data </a></li>
                                            <li>
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
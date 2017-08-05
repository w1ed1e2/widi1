@extends('templates.admin.layout')

@section('title')
	<h1>Output Anggaran
    	<small>- Data Master</small>
	</h1>
@endsection

@section('breadcrumb')
	<li>
    	<a href="index.html">Data Master</a><i class="fa fa-circle"></i>
	</li>
	<li>
   		<span>Output Anggaran</span>
	</li>
@endsection

@section('content')
	<div class="row">
    	<div class="col-md-12 col-sm-12">
           	<div class="portlet light bordered">
                <div class="portlet-title">
                	<div class="caption caption-md">
                       	<i class="fa fa-database"></i>
                        <span class="caption-subject font-green-steel bold uppercase">Output Anggaran</span>
                    </div>
                </div>
            	<div class="portlet-body">
            		<div class="table-scrollable table-scrollable-borderless">
                    	<table class="table table-hover table-light">
                        	<thead>
                            	<tr class="uppercase">
                                	<th> No </th>
                                	<th> Kode </th>
                                	<th> Judul </th>
                                	<th> Modifikasi </th>
                                	<th> Aktif </th>
                                	<th> Aksi </th>
                            	</tr>
                        	</thead>
                        	<?php $i = 0;?>
                        	@foreach($data as $dt)
                        	<?php $i++;?>
                        	<tr>
                            	<td style="text-align: right;"> <?php echo $i;?>. </td>
                            	<td> {{$dt->kode}} </td>
                            	<td> {{$dt->title}} </td>
                            	<td> {{ \Carbon\Carbon::parse($dt->modified)->format('d/m/Y')}} </td>
                            	<td>
                            		@if ($dt->active=="1")
                            			<span class="label label-sm label-primary">Aktif</span>
                            		@else
                            			<span class="label label-sm label-danger">Tidak Aktif</span>
                            		@endif
                            	</td>
                            	<td>
                            		<div class="btn-group">
                                        <button type="button" class="btn btn-default">Menu</button>
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
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
                	</div>
            	</div>
       		</div>
    	</div>
    </div>
@endsection

@extends('templates.admin.layout')

@section('title')
	<h1>Propinsi
    	<small>- Data Master</small>
	</h1>
@endsection

@section('breadcrumb')
	<li>
    	<a href="index.html">Data Master</a><i class="fa fa-circle"></i>
	</li>
	<li>
   		<span>Propinsi</span>
	</li>
@endsection

@section('content')
	<div class="row">
    	<div >
           	<div class="portlet light bordered">
                <div class="portlet-title">
                	<div class="caption caption-md">
                       	<i class="fa fa-database"></i>
                        <span class="caption-subject font-green-steel bold uppercase">Data Propinsi</span>
                    </div>
                </div>
            	<div class="portlet-body">
            		
                    	<table class="table table-hover table-striped table-bordered" id="example">
                        	<thead>
                            	<tr class="uppercase">
                                	<th style="width:20px;"> No </th>
                                	<th style="width:40px;"> Kode </th>
                                	<th> Nama Propinsi </th>
                                	                          	
                            	</tr>
                        	</thead>
                        	<?php $i = 0;?>
                        	@foreach($data as $rs)
                        	<?php $i++;?>
                        	<tr>
                            	<td style="text-align: right;"> <?php echo $i;?>. </td>
                            	<td> {{$rs->kode}} </td>
                            	<td> {{$rs->title}} </td>
                            	                	                          
                        	</tr>
                        	@endforeach
                    	</table>                	
            	</div>
       		</div>
    	</div>
    </div>
@endsection
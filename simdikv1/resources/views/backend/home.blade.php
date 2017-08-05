@extends('templates.admin.layout')

@section('content')
	<div class="row">
    	<div class="col-md-12 col-sm-12">
           	<div class="portlet light bordered">
                <div class="portlet-title">
                	<div class="caption caption-md">
                       	<i class="fa fa-database"></i>
                        <span class="caption-subject font-green-steel bold uppercase">Rekapitulasi Data Lembaga</span>
                    </div>
                </div>
            	<div class="portlet-body">
            		<div class="table-scrollable table-scrollable-borderless">
                    	<table class="table table-hover table-light">
                        	<thead>
                            	<tr class="uppercase">
                                	<th> No </th>
                                	<th> Propinsi </th>
                                	<th> Jenis </th>
                                	<th> Pengelola </th>
                                	<th> Status </th>
                                	<th> Jumlah </th>
                            	</tr>
                        	</thead>
                        	<tr>
                            	<td> 1 </td>
                            	<td> JAWA TENGAH </td>
                            	<td> 124 </td>
                            	<td> 124 </td>
                            	<td> 124 </td>
                            	<td> 124 </td>
                        	</tr>
                    	</table>
                	</div>
            	</div>
       		</div>
    	</div>
    </div>
@endsection

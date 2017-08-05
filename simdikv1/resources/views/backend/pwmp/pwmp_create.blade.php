@extends('templates.admin.layout')

@section('title')
    <h1>Tambah Data
        <small>- Penumbuhan Wirausaha Muda Pertanian</small>
    </h1>
@endsection

@section('breadcrumb')
    <li>
        <a href="index.html">Bid. Penyelenggaraan Pendidikan</a><i class="fa fa-circle"></i>
    </li>
    <li>
        <span>Tambah Data</span>
    </li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption caption-md">                        
                        <span class="caption-subject font-green-steel bold uppercase"><i class="fa fa-plus-square"></i> Form Tambah Data PWMP</span>
                    </div>                    
                    <div class="actions">
                        <a href="{{ url('/admin/pwmp')}}" class="btn btn-circle default"><i class="fa fa-chevron-left"></i> Back </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form action="{{route('pwmp.store')}}" method="post" class="form-horizontal">
                    	<div class="form-body">
                    		<div class="row">
                				<div class="col-md-6">
                					<div class="form-group">
                						<label class="col-md-3 control-label">Lembaga/Sekolah </label>
                						<div class="col-md-8">
                							<select class="form-control" name="lembaga">
                								<option>-- Silahkan Pilih --</option>
                								@foreach($lembaga as $l)
                								<option value="{{$l->id}}">{{$l->title}}</option>
                								@endforeach
                							</select>
                						</div>
		                			</div>
		                			<div class="form-group">
                						<label class="col-md-3 control-label">Nama Kelompok</label>
                						<div class="col-md-6">
                							<input type="text" name="kelompok" class="form-control">
                							@if ($errors->has('kelompok'))
                                				<span class="help-block has-error"><em>Field Nama Kelompok tidak boleh kosong</em></span>
                                			@endif
                						</div>
		                			</div>
		                			<div class="form-group">
                						<label class="col-md-3 control-label">Jenis Usaha</label>
                						<div class="col-md-6">
                							<input type="text" name="jenisusaha" class="form-control">
                							@if ($errors->has('jenisusaha'))
                                				<span class="help-block has-error"><em>Field Jenis Usaha tidak boleh kosong</em></span>
                                			@endif
                						</div>
		                			</div>
		                			<div class="form-group">
                						<label class="col-md-3 control-label">Jumlah Bantuan</label>
                						<div class="col-md-4">
                							<input type="text" name="jmlbantuan" class="form-control">
                							@if ($errors->has('jmlbantuan'))
                                				<span class="help-block has-error"><em>Field Jumlah Bantuan tidak boleh kosong</em></span>
                                			@endif
                						</div>
		                			</div>
		                			<div class="form-group">
                						<label class="col-md-3 control-label">Tanggal Terima</label>
                						<div class="col-md-4">                							
                							<div class="input-group date">
											    <input type="text" class="form-control tglterima" name="tglterima">
											    <div class="input-group-addon">
											        <span class="glyphicon glyphicon-th"></span>
											    </div>
											</div>                							
                						</div>
		                			</div>

		                			<h4 class="form-section" style="border-bottom: 1px dashed #efefef;padding:10px 0;margin-top:20px;">ANGGOTA</h4>
        	        				<div class="input-group control-group after-add-more col-md-10">
        	        					<input type="text" name="anggota[]" class="form-control" placeholder="Nama Anggota">
        	        					<div class="input-group-btn"> 
            								<button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i></button>
          								</div>
        	        				</div>

        	        				<div class="copy hide">
        	        					<div class="control-group input-group col-md-10" style="margin-top:10px">
        	        						<input type="text" name="anggota[]" class="form-control" placeholder="Nama Anggota">
            								<div class="input-group-btn">
            								<button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i></button>
            								</div>
            							</div>
        	        				</div>

		                		</div>
            		    		<div class="col-md-6">        	        				
        	        				<h4 class="form-section" style="border-bottom: 1px dashed #efefef;padding-top:10px 0;margin-top: 0px;">PERKEMBANGAN USAHA</h4>
        	        				<div class="control-group1 after-add-more1">
        	        					<div class="form-group">
        	        						<label class="col-md-2 control-label">Tahun</label>
        	        						<div class="col-md-4">
        	        							<input type="text" class="form-control tglterima" name="progressthn[]">
        	        						</div>
        	        					</div>
        	        					<div class="form-group">
        	        						<label class="col-md-2 control-label">Deskripsi</label>
        	        						<div class="col-md-10">
        	        							<input type="text" name="progresdeskripsi[]" class="form-control">
        	        						</div>
        	        					</div>
        	        					<div class="form-group">        	        					
        	        						<div class="col-md-10 col-md-offset-2">
        	        							<button type="button" class="btn btn-success add-more1"><i class="glyphicon glyphicon-plus"></i> Add</button>
        	        						</div>
        	        					</div>
        	        				</div>

        	        				<div class="copy1 hide">
        	        					<div class="control-group1" style="border-top: 1px dashed #efefef;padding-top:10px;">
        	        						<div class="form-group">
        	        							<label class="col-md-2 control-label">Tahun</label>
        	        							<div class="col-md-4">
        	        								<input type="text" class="form-control tglterima" name="progressthn[]">
        	        							</div>
        	        						</div>
        	        						<div class="form-group">
        	        							<label class="col-md-2 control-label">Deskripsi</label>
        	        							<div class="col-md-10">
        	        								<input type="text" name="progresdeskripsi[]" class="form-control">
        	        							</div>
        	        						</div>
        	        						<div class="form-group">        	        					
        	        							<div class="col-md-10 col-md-offset-2">
        	        								<button type="button" class="btn red remove1"><i class="glyphicon glyphicon-remove"></i> Remove</button>
        	        							</div>
        	        						</div>
        	        					</div>
        	        				</div>
                				</div>
                			</div>
                		</div>
                		<div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-0 col-md-6">
                                	<input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                    <button type="submit" class="btn green"><i class="fa fa-check"></i> Simpan</button>
                                    <a href="{{url('/admin/pwmp')}}" class="btn btn-default"><i class="fa fa-remove"></i> Batal </a>
                                    
                                </div>
                            </div>
                        </div>
                	</form>
                </div>
            </div>
        </div>
    </div>
@endsection
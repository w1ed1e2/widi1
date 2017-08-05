@extends('templates.admin.layout')

@section('title')
    <h1>Tambah Data
        <small>- Bahan Ajar</small>
    </h1>
@endsection

@section('breadcrumb')
    <li>
        <a href="index.html">Bid. Penyelenggaraan Pendidikan</a><i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="index.html">Bahan Ajar</a><i class="fa fa-circle"></i>
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
                        <span class="caption-subject font-green-steel bold uppercase"><i class="fa fa-plus-circle"></i> Form Tambah Data</span>
                    </div>
                    <div class="actions">
                        <a href="{{ url('/admin/bahanajar')}}" class="btn btn-circle default"><i class="fa fa-chevron-left"></i> Back </a>
                    </div>                    
                </div>
                <div class="portlet-body form">
                	<form action="{{route('bahanajar.store')}}" method="post" class="form-horizontal">                	 
                		<div class="form-body">
                            <div class="note note-info">
                                <h4 class="block">Informasi</h4>
                                <p>Isikan semua data Bahan Ajar dengan selengkapnya, jangan ada yang dikosongi.</p>                              
                            </div>
                			<div class="row">
                				<div class="col-md-12">
                					<div class="form-group">
                						<label class="col-md-3 control-label">Judul Bahan Ajar <span class="required" aria-required="true">*</span></label>
                						<div class="col-md-7">
                							<input type="text" name="judul" class="form-control">
                							@if ($errors->has('judul'))
                                				<span class="help-block"><em>Field judul buku tidak boleh kosong</em></span>
                                			@endif
                						</div>
		                			</div>
		                			
		                			<div class="form-group">
                						<label class="col-md-3 control-label">Pengarang <span class="required" aria-required="true">*</span></label>
                						<div class="col-md-5">
                							<input type="text" name="pengarang" class="form-control">
                							@if ($errors->has('pengarang'))
                                				<span class="help-block"><em>Field Pengarang tidak boleh kosong</em></span>
                                			@endif
                						</div>
		                			</div>
		                			<div class="form-group">
                						<label class="col-md-3 control-label">Nomor Buku<span class="required" aria-required="true">*</span></label>
                						<div class="col-md-3">
                							<input type="text" name="nomor" class="form-control">
                							@if ($errors->has('nomor'))
                                				<span class="help-block has-error"><em>Field Nomor buku tidak boleh kosong</em></span>
                                			@endif
                						</div>
		                			</div>		                					                			
		                			<div class="form-group">
                						<label class="col-md-3 control-label">Untuk Pendidikan <span class="required" aria-required="true">*</span></label>
                						<div class="col-md-3">
                							<select class="form-control" name="untuk">
                								<option>-- Silahkan Pilih --</option>
                								@foreach($untk as $u)
                								<option value="{{$u}}">{{$u}}</option>
                								@endforeach
                							</select>
                						</div>
		                			</div>
		                			<div class="form-group">
                						<label class="col-md-3 control-label">Program Studi <span class="required" aria-required="true">*</span></label>
                						<div class="col-md-5">
                							<select class="form-control" name="prodi">
                								<option>-- Silahkan Pilih --</option>
                							@foreach($prodi as $p)
                								<option value="{{$p->id}}">{{$p->kode}} ({{$p->title}})</option>                								
                							@endforeach
                							</select>                							
                						</div>
		                			</div>
		                			<div class="form-group">
                						<label class="col-md-3 control-label">Tingkat</label>
                						<div class="col-md-2">
                							<select class="form-control" name="tingkat">
                							<option>-- Silahkan Pilih --</option>
                							@foreach($tingkat as $t)
                								<option value="{{$t}}">{{$t}}</option>
                							@endforeach
                							</select>
                						</div>
		                			</div>
		                			<div class="form-group">
                						<label class="col-md-3 control-label">Tahun Terbit<span class="required" aria-required="true">*</span></label>
                						<div class="col-md-2">                							
                							<div class="input-group date">
											    <input type="text" class="form-control tanggal" name="tahun">
											    <div class="input-group-addon">
											        <span class="glyphicon glyphicon-th"></span>
											    </div>
											</div>
                							@if ($errors->has('tahun'))
                                				<span class="help-block"><em>Field tahun tidak boleh kosong</em></span>
                                			@endif
                						</div>
		                			</div>
		                			<div class="form-group">
                						<label class="col-md-3 control-label">Status<span class="required" aria-required="true">*</span></label>
                						<div class="col-md-2">
                							<select class="form-control" name="status">
                								<option value="Berlaku">Masih Berlaku</option>
                								<option value="Tidak Berlaku">Tidak Berlaku</option>
                							</select>
                						</div>
		                			</div>
		                			<div class="form-group">
                						<label class="col-md-3 control-label">Deskripsi <span class="required" aria-required="true">*</span></label>
                						<div class="col-md-5">
                                            <textarea class="form-control" rows="7" name="deskripsi"></textarea>
                                            @if ($errors->has('deskripsi'))
                                				<span class="help-block"><em>Field deskripsi tidak boleh kosong</em></span>
                                			@endif
                                        </div>
		                			</div>		                			                                    
                				</div>                				
                			</div>                			
                		</div>                        
                		<div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-5">
                                	<input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                    <button type="submit" class="btn green"><i class="fa fa-check"></i> Simpan</button>
                                    <button type="submit" class="btn default"><i class="fa fa-remove"></i> Batal </button>
                                </div>
                            </div>
                        </div>
                	</form>
                </div>
            </div>
        </div>
    </div>
@endsection
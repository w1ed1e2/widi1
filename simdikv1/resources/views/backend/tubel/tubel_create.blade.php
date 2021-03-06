@extends('templates.admin.layout')

@section('title')
    <h1>Tambah Data
        <small>- Tugas Belajar</small>
    </h1>
@endsection

@section('breadcrumb')
    <li>
        <a href="index.html">Dashboard</a><i class="fa fa-circle"></i>
    </li>
    <li>
        <span>Tugas Belajar</span><i class="fa fa-circle"></i>
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
                        <a href="{{ url('/admin/tubel')}}" class="btn btn-circle default"><i class="fa fa-chevron-left"></i> Back </a>
                    </div>                    
                </div>
                <div class="portlet-body form">
                	<form action="{{route('tubel.store')}}" method="post" class="form-horizontal">
                		<div class="form-body">
                            <div class="note note-info">
                                <h4 class="block">Informasi</h4>
                                <p>Isikan semua data Tugas Belajar dengan selengkapnya, jangan ada yang dikosongi.</p>
                            </div>
                			<div class="row">
                				<div class="col-md-6">
                					<div class="form-group">
                						<label class="col-md-4 control-label">Nama Lengkap</label>
                						<div class="col-md-8">
                							<input type="text" name="namalengkap" class="form-control">
                						</div>
		                			</div>
		                			<div class="form-group">
                						<label class="col-md-4 control-label">Unit Kerja</label>
                						<div class="col-md-8">
                							<input type="text" name="unitkerja" class="form-control">
                						</div>
		                			</div>
		                			<div class="form-group">
                						<label class="col-md-4 control-label">Nomor SK</label>
                						<div class="col-md-6">
                							<input type="text" name="sk" class="form-control">
                						</div>
		                			</div>
		                			<div class="form-group">
                						<label class="col-md-4 control-label">Sumber Biaya</label>
                						<div class="col-md-8">
                							<select class="form-control" name="sumberbiaya">
                							@foreach($sumber as $s)
                								<option value="{{$s}}">{{$s}}</option>                								
                							@endforeach
                							</select>
                						</div>
		                			</div>
		                			
		                			<div class="form-group">
                						<label class="col-md-4 control-label">Perguruan Tinggi Tujuan</label>
                						<div class="col-md-8">
                							<input type="text" name="pt" class="form-control">
                						</div>
		                			</div>
		                			<div class="form-group">
                						<label class="col-md-4 control-label">Program Studi</label>
                						<div class="col-md-8">
                							<input type="text" name="prodi" class="form-control">
                						</div>
		                			</div>
		                			<div class="form-group">
                                        <label class="col-md-4 control-label">Jenjang</label>
                                        <div class="col-md-4">
                                            <select class="form-control" name="jenjang">
                                            @foreach($jenjang as $j)
                								<option value="{{$j}}">{{$j}}</option>                								
                							@endforeach
                							</select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Tahun Masuk</label>
                                        <div class="col-md-4">
                                            <input type="text" name="thnmasuk" class="form-control">
                                        </div>
                                    </div>		                			
                				</div>
                				<div class="col-md-6">
                					<div class="form-group">
                						<label class="col-md-4 control-label">Renc. Mulai</label>
                						<div class="col-md-3">
                							<input type="text" name="mulai" class="form-control">			
                						</div>
                						<label class="col-md-2 control-label">Selesai</label>
                						<div class="col-md-3">
                							<input type="text" name="selesai" class="form-control">			
                						</div>
		                			</div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">IPK</label>
                                        <div class="col-md-3">
                                            <input type="text" name="ipk" class="form-control">
                                        </div>                                        
                                    </div>		                					                			
		                			<div class="form-group">
                						<label class="col-md-4 control-label">Gelar</label>
                						<div class="col-md-3">
                							<input type="text" name="gelar" class="form-control">
                						</div>
		                			</div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Judul Tesis</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" rows="3" name="judultesis"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Keterangan</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" rows="3" name="keterangan"></textarea>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Status</label>
                                        <div class="col-md-6">
                                            <select class="form-control" name="status">
                                            @foreach($status as $st)
                								<option value="{{$st}}">{{$st}}</option>                								
                							@endforeach
                							</select>
                                        </div>
                                    </div>
                				</div>
                			</div>                			
                		</div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-4">
                                	<input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                    <button type="submit" class="btn green"><i class="fa fa-check"></i> Simpan</button>
                                    <a href="{{ url('/admin/tubel')}}" class="btn btn-default"><i class="fa fa-remove"></i> Batan</a>                                    
                                </div>
                            </div>
                        </div>
                	</form>
                </div>
            </div>
        </div>
    </div>
@endsection
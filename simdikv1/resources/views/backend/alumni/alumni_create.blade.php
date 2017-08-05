@extends('templates.admin.layout')

@section('title')
    <h1>Tambah Data
        <small>- Alumni</small>
    </h1>
@endsection

@section('breadcrumb')
    <li>
        <a href="#">Bid. Penyelenggaraan Pendidikan</a><i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="{{url('/admin/alumni')}}">Alumni</a><i class="fa fa-circle"></i>
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
                        <a href="{{ url('/admin/alumni')}}" class="btn btn-circle default"><i class="fa fa-chevron-left"></i> Back </a>
                    </div>                    
                </div>
                <div class="portlet-body form">
                	<form action="" method="post" class="form-horizontal">
                		<div class="form-body">
                            <div class="note note-info">
                                <h4 class="block">Informasi</h4>
                                <p>Isikan semua data tenaga baik pendidikan maupun kependidikan dengan selengkapnya, jangan ada yang dikosongi.</p>
                            </div>
                			<div class="row">
                				<div class="col-md-12">
                					<div class="form-group">
                						<label class="col-md-3 control-label">No Ijazah</label>
                						<div class="col-md-3">
                							<input type="text" name="" class="form-control">
                						</div>
		                			</div>
		                			<div class="form-group">
                						<label class="col-md-3 control-label">Tanggal Ijazah</label>
                						<div class="col-md-3">
                							<input type="text" name="" class="form-control">
                						</div>
		                			</div>
		                			<div class="form-group">
                						<label class="col-md-3 control-label">Registrasi Ijazah</label>
                						<div class="col-md-3">
                							<input type="text" name="" class="form-control">
                						</div>
		                			</div>		                					                			

		                			<div class="form-group">
                						<label class="col-md-3 control-label">IPK</label>
                						<div class="col-md-2">
                							<input type="text" name="" class="form-control">
                						</div>
		                			</div>
		                			<div class="form-group">
                						<label class="col-md-3 control-label">Tahun Lulus</label>
                						<div class="col-md-2">
                							<input type="text" name="" class="form-control">
                						</div>
		                			</div>		                			                                    
                				</div>
                				
                			</div>                			
                		</div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-12">
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
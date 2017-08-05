@extends('templates.admin.layout')

@section('title')
    <h1>Tambah Data
        <small>- Tenaga Pendidik dan Kependidikan</small>
    </h1>
@endsection

@section('breadcrumb')
    <li>
        <a href="index.html">Bid. Ketenagaan dan Kelembagaan</a><i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="index.html">Tenaga Pengajar</a><i class="fa fa-circle"></i>
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
                        <a href="{{ url('/admin/tenaga')}}" class="btn btn-circle default"><i class="fa fa-chevron-left"></i> Back </a>
                    </div>                    
                </div>
                <div class="portlet-body form">
                	<form action="" method="post" class="form-horizontal">
                		<div class="form-body">
                            <div class="note note-info">
                                <h4 class="block">Informasi</h4>
                                <p>Isikan semua data tenaga baik pendidikan maupun kependidikan dengan selengkapnya, jangan ada yang dikosoni.</p>
                            </div>
                			<div class="row">
                				<div class="col-md-6">
                					<div class="form-group">
                						<label class="col-md-4 control-label">NIP</label>
                						<div class="col-md-5">
                							<input type="text" name="" class="form-control">
                						</div>
		                			</div>
		                			<div class="form-group">
                						<label class="col-md-4 control-label">Nama Pegawai</label>
                						<div class="col-md-8">
                							<input type="text" name="" class="form-control">
                						</div>
		                			</div>
		                			<div class="form-group">
                						<label class="col-md-4 control-label">Tempat Lahir</label>
                						<div class="col-md-6">
                							<input type="text" name="" class="form-control">
                						</div>
		                			</div>
		                			<div class="form-group">
                						<label class="col-md-4 control-label">Tanggal Lahir</label>
                						<div class="col-md-6">
                							<select class="form-control">

                								<option>Laki-laki</option>
                								<option>Perempuan</option>
                							</select>
                						</div>
		                			</div>
		                			<div class="form-group">
                						<label class="col-md-4 control-label">Jenis Kelamin</label>
                						<div class="col-md-5">
                							<select class="form-control">
                								<option>-- Pilih Jenis Kelamin --</option>
                                                <option>Laki-laki</option>
                								<option>Perempuan</option>
                							</select>
                						</div>
		                			</div>

		                			<div class="form-group">
                						<label class="col-md-4 control-label">Gelar Depan</label>
                						<div class="col-md-5">
                							<input type="text" name="" class="form-control">
                						</div>
		                			</div>
		                			<div class="form-group">
                						<label class="col-md-4 control-label">Gelar Belakang</label>
                						<div class="col-md-5">
                							<input type="text" name="" class="form-control">
                						</div>
		                			</div>
		                			<div class="form-group">
                                        <label class="col-md-4 control-label">Alamat</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Kota</label>
                                        <div class="col-md-8">
                                            <input type="text" name="" class="form-control">
                                        </div>
                                    </div>		                			
                				</div>
                				<div class="col-md-6">
                					<div class="form-group">
                						<label class="col-md-4 control-label">Agama</label>
                						<div class="col-md-5">
                							<select class="form-control">
                                                <option>-- Pilih Agama --</option>
                								<option>Islam</option>
                								<option>Kristen Protestan</option>
                							</select>
                						</div>
		                			</div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Lembaga</label>
                                        <div class="col-md-8">
                                            <select class="form-control">
                                                <option>-- Pilih Lembaga --</option>
                                                <option>Islam</option>
                                                <option>Kristen Protestan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Kepegawaian</label>
                                        <div class="col-md-8">
                                            <input type="text" name="" class="form-control">
                                        </div>
                                    </div>		                					                			
		                			<div class="form-group">
                						<label class="col-md-4 control-label">NUPTK</label>
                						<div class="col-md-5">
                							<input type="text" name="" class="form-control">
                						</div>
		                			</div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Sertifikasi</label>
                                        <div class="col-md-5">
                                            <input type="text" name="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Tugas Tambahan</label>
                                        <div class="col-md-8">
                                            <input type="text" name="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">TMT Kerja</label>
                                        <div class="col-md-4">
                                            <input type="text" name="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Jumlah Jam/Minggu</label>
                                        <div class="col-md-4">
                                            <input type="text" name="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Mata Kuliah</label>
                                        <div class="col-md-8">
                                            <input type="text" name="" class="form-control">
                                        </div>
                                    </div>
                				</div>
                			</div>                			
                		</div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-4">
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
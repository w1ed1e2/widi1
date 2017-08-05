@extends('templates.admin.layout')

@section('title')
    <h1>Detail Data
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
        <span>Detail Data</span>
    </li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption caption-md">                        
                        <span class="caption-subject font-green-steel bold uppercase"><i class="fa fa-book"></i> Detail Bahan Ajar</span>
                    </div>
                    <div class="actions">
                        <a href="{{ url('/admin/bahanajar')}}" class="btn btn-circle default"><i class="fa fa-chevron-left"></i> Back </a>
                    </div>                    
                </div>
                <div class="portlet-body form">
                    <div class="row">
                        <div class="col-md-12">                        
                            <div class="form-group">
                                <label class="col-md-3 control-label">Judul Bahan Ajar</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">: {{$bhajar->judul}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Pengarang</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">: {{$bhajar->pengarang}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Nomor Buku</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">: {{$bhajar->nomor}}</p>
                                </div>
                            </div>                            
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">Untuk Pendidikan</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">: {{$bhajar->untuk}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Program Studi</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">: {{$bhajar->mst_prodi_id}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Tingkat</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">: {{$bhajar->tingkat}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Tahun Terbit</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">: {{$bhajar->tahun}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Status</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">: {{$bhajar->status}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Deskripsi</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">: {{$bhajar->deskripsi}}</p>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">Aktif</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">: {{$bhajar->active}}</p>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
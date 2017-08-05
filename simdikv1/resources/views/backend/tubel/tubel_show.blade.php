@extends('templates.admin.layout')

@section('title')
    <h1>Detail Data
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
                        <a href="{{ url('/admin/tubel')}}" class="btn btn-circle default"><i class="fa fa-chevron-left"></i> Back </a>
                    </div>                    
                </div>
                <div class="portlet-body form">
                    <div class="row">
                        <div class="col-md-12">                        
                            <div class="form-group">
                                <label class="col-md-3 control-label">Nama Lengkap</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">: {{$tubel->nama}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">SK Tugas Belajar</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">: {{$tubel->sk}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Unit Kerja</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">: {{$tubel->unit}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Sumber Biaya</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">: {{$tubel->sumber_biaya}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Perguruan Tinggi</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">: {{$tubel->pt}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Program Studi</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">: {{$tubel->prodi}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Jenjang</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">: {{$tubel->jenjang}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Tahun Masuk</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">: {{$tubel->tahun}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Rencana Mulai s/d Selesai</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">: {{$tubel->rc_mulai}} s/d {{$tubel->rc_selesai}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">IPK</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">: {{$tubel->ipk}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Gelar</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">: {{$tubel->gelar}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Judul Tesis</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">: {{$tubel->judul_tesis}}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">: {{$tubel->status}}</p>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('templates.admin.layout')

@section('title')
    <h1>Edit Data
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
        <span>Edit Data</span>
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
                        <a href="{{route('bahanajar.index')}}" class="btn btn-circle default"><i class="fa fa-chevron-left"></i> Back </a>
                    </div>                    
                </div>
                <div class="portlet-body form">
                    <form action="{{ route('bahanajar.update', ['id' => $bhajar->id]) }}" method="POST" class="form-horizontal">
                     
                        <div class="form-body">
                            <div class="note note-info">
                                <h4 class="block">Informasi</h4>
                                <p>Isikan semua data Bahan Ajar dengan selengkapnya, jangan ada yang dikosongi.</p>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Judul Bahan Ajar</label>
                                        <div class="col-md-7">
                                            <input type="text" name="judul" class="form-control" value="{{$bhajar->judul}}">
                                            @if ($errors->has('judul'))
                                                <span class="help-block"><em>Field judul buku tidak boleh kosong</em></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Pengarang</label>
                                        <div class="col-md-5">
                                            <input type="text" name="pengarang" class="form-control" value="{{$bhajar->pengarang}}">
                                            @if ($errors->has('pengarang'))
                                                <span class="help-block"><em>Field Pengarang tidak boleh kosong</em></span>
                                            @endif
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Nomor</label>
                                        <div class="col-md-3">
                                            <input type="text" name="nomor" class="form-control" value="{{$bhajar->nomor}}">                                            
                                            @if ($errors->has('nomor'))
                                                <span class="help-block has-error"><em>Field Nomor buku tidak boleh kosong</em></span>
                                            @endif
                                        </div>
                                    </div>
                                                                                                         

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Untuk Pendidikan</label>
                                        <div class="col-md-3">
                                            <select class="form-control" name="untuk">       
                                                @foreach($untk as $u)
                                                <option value="{{$u}}" {{$bhajar->untuk == $u ? "selected" : '' }}>{{$u}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Program Studi</label>
                                        <div class="col-md-5">
                                            <select class="form-control" name="mst_prodi_id">
                                                @foreach($prodi as $p)
                                                <option value="{{$p->id}}" {{$bhajar->mst_prodi_id == $p->id ? "selected" : '' }}>{{$p->kode}} - {{$p->title}}</option>             
                                                @endforeach
                                            </select>                                           
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Tingkat</label>
                                        <div class="col-md-2">
                                            <select class="form-control" name="tingkat">
                                            @foreach($tingkat as $t)
                                                <option value="{{$t}}" {{$bhajar->tingkat == $t ? "selected" : '' }}>{{$t}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Tahun Terbit</label>
                                        <div class="col-md-2">
                                            <div class="input-group date">
                                                <input type="text" class="form-control tanggal" name="tahun" value="{{$bhajar->tahun}}">
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
                                        <label class="col-md-3 control-label">Deskripsi</label>
                                        <div class="col-md-5">
                                            <textarea class="form-control" rows="7" name="deskripsi">{{$bhajar->deskripsi}}</textarea>
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
                                    <input name="_method" type="hidden" value="PUT">
                                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                    <button type="submit" class="btn green"><i class="fa fa-check"></i> Update</button>
                                    <a href="{{route('bahanajar.index')}}" class="btn default"><i class="fa fa-remove"></i> Batal </a>
                                    
                                </div>
                            </div>
                        </div>
                     </form>
                </div>
            </div>
        </div>
    </div>
@endsection
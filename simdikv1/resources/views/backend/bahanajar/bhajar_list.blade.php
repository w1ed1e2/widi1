@extends('templates.admin.layout')

@section('title')
    <h1>Bahan Ajar
        <small>- Data Bahan Ajar</small>
    </h1>
@endsection

@section('breadcrumb')
    <li>
        <a href="index.html">Bid. Penyelenggaraan Pendidikan</a><i class="fa fa-circle"></i>
    </li>
    <li>
        <span>Bahan Ajar</span>
    </li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption caption-md">                        
                        <span class="caption-subject font-green-steel bold uppercase"><i class="fa fa-book"></i> Bahan Ajar</span>
                    </div>
                    <div class="actions">
                        <a href="{{ url('/admin/bahanajar/create')}}" class="btn btn-circle btn-primary uppercase"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div>
                <div class="portlet-body">
                        @if(Session::has('msg'))
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            <i class="fa fa-info-circle"></i> {{ Session::get('msg') }}
                        </div>
                        @endif

                        @if ($bhajar->isEmpty())
                            <div class="alert alert-warning">
                                <p>Maaf, Data Bahan Ajar masih kosong</p>
                            </div>
                        @else
                        <table class="table table-hover table-striped table-bordered" id="example">
                            <thead>
                                <tr class="uppercase">
                                    <th style="width:10px;"> No </th>
                                    <th> Judul </th>
                                    <th> Pengarang </th>
                                    <th> Nomor</th>
                                    <th style="width: 150px;"> Prodi </th>
                                    <th style="width: 50px;"> Tingkat </th>
                                    <th style="width: 50px;"> Tahun </th>
                                    <th style="width: 80px;"> Aksi </th>                                                                        
                                </tr>
                            </thead>
                            
                            <?php $i = 0;?>
                            @foreach($bhajar as $b)
                            <?php $i++;?>                            
                            <tr>
                                <td style="text-align: right;"><?php echo $i;?>.</td>
                                <td>{{$b->judul}}</td>
                                <td>{{$b->pengarang}}</td>
                                <td>{{$b->nomor}}</td>
                                <td>{{$b->Prodi->title}}</td>
                                <td>{{$b->tingkat}}</td>
                                <td>{{$b->tahun}}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn default">Menu</button>
                                        <button type="button" class="btn default dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="{{ route('bahanajar.show', ['id' => $b->id]) }}"><i class="fa fa-arrow-right"></i> Detail </a></li>
                                            <li><a href="{{ route('bahanajar.edit', ['id' => $b->id]) }}"><i class="fa fa-edit"></i> Edit </a></li>
                                            <li>                                            
                                            <a href="{{ route('bahanajar.destroy', ['id' => $b->id]) }}"><i class="fa fa-remove"></i> Hapus </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>                                                          
                            </tr>
                            @endforeach                            
                        </table>
                        @endif                        
                </div>
            </div>
        </div>
    </div>
@endsection
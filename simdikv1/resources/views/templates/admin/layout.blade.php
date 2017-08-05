<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <title>{{$title or "Dashboard SIMDIK"}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="SIMDIK Kementerian Pertanian Republik Indonesia" name="description" />
    <meta content="" name="author" />

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/vendors/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/vendors/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css" />
    
    <!--datatables -->    
    <link href="{!! asset('assets/vendors/datatables/media/css/dataTables.bootstrap.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/vendors/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') !!}" rel="stylesheet" type="text/css" />

    <link href="{!! asset('assets/css/components.min.css') !!}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{!! asset('assets/css/plugins.min.css') !!}" rel="stylesheet" type="text/css" />
    
    
    <link href="{!! asset('assets/css/layout.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/css/themes/default.css') !!}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{!! asset('assets/css/custom.min.css') !!}" rel="stylesheet" type="text/css" />
    

    <link rel="shortcut icon" href="favicon.ico" />    
</head>
<body class="page-container-bg-solid">
<div class="page-wrapper">
    <div class="page-wrapper-row">
        <div class="page-wrapper-top">
            <div class="page-header">
                <div class="page-header-top">
                    <div class="container">
                        <div class="page-logo">
                            <a href="index.html">
                                <img src="{!! asset('assets/img/logo.png') !!}" alt="logo" class="logo-default">
                            </a>
                        </div>
                        <div style="margin:30px 0 0 0;font-size:16px;">
                            <strong><span style='color:#0e4f0a;font-size:26px;'>ADMINISTRASI | </span></strong> (SIMDIK) Sistem Informasi Pendidikan
                        </div>
                    </div>
                </div>
                <div class="page-header-menu">
                    <div class="container">
                        <div class="hor-menu  ">
                            <ul class="nav navbar-nav">
                                <li aria-haspopup="true">
                                    <a href="javascript:;"><i class="fa fa-home"></i> Beranda</a>
                                </li>
                                <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown">
                                    <a href="javascript:;"><i class="fa fa-database" aria-hidden="true"></i> Data Master
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="dropdown-menu pull-left">
                                        <li aria-haspopup="true" class=" ">
                                            <a href="{{ url('/admin/anggaran') }}" class="nav-link  "><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Output Anggaran </a>
                                        </li>
                                        <li aria-haspopup="true" class=" ">
                                            <a href="{{ url('/admin/propinsi') }}" class="nav-link  "><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Propinsi </a>
                                        </li>
                                        <li aria-haspopup="true" class=" ">
                                            <a href="{{ url('/admin/kabupaten') }}" class="nav-link  "><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Kabupaten </a>
                                        </li>
                                        <li aria-haspopup="true" class=" ">
                                            <a href="./admin/jurusan" class="nav-link  "><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Jurusan </a>
                                        </li>
                                        <li aria-haspopup="true" class=" ">
                                            <a href="./prodi" class="nav-link  "><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Prodi </a>
                                        </li>
                                        <li aria-haspopup="true" class=" ">
                                            <a href="./pangkat" class="nav-link  "><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Pangkat </a>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown  ">
                                    <a href="javascript:;"><i class="fa fa-mortar-board" aria-hidden="true"></i> Kependidikan
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="dropdown-menu" style="min-width: 710px">
                                        <li>
                                            <div class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul class="mega-menu-submenu">
                                                            <li><h3 class="uppercase">Bid. Penyelenggaraan Pendidikan</h3></li>
                                                            <li><a href="{{url('/admin/pesertadidik')}}"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Peserta Didik </a></li>
                                                            <li><a href="{{url('/admin/alumni')}}"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Alumni </a></li>
                                                            <li><a href="{{url('/admin/bahanajar')}}"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Bahan Ajar </a></li>
                                                            <li><a href="{{url('admin/pwmp')}}"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> PWMP </a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul class="mega-menu-submenu">
                                                            <li><h3 class="uppercase">Bid. Program dan Kerjasama</h3></li>
                                                            <li><a href="{{url('/admin/tubel')}}"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Tugas Belajar </a></li>
                                                            <li><a href="{{url('/admin/anggaran')}}"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Anggaran </a></li>
                                                            <li><a href="{{url('admin/alatpraktik')}}"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Bantuan Alat Praktik </a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul class="mega-menu-submenu">
                                                            <li><h3 class="uppercase">Bid. Ketenagaan dan Kelembagaan</h3></li>
                                                            <li><a href="{{ url('/admin/lembaga') }}"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Kelembagaan </a></li>
                                                            <li><a href="{{ url('/admin/tenaga') }}"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Tenaga Pengajar </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown  ">
                                    <a href="javascript:;"><i class="fa fa-refresh" aria-hidden="true"></i> Mon. E-Learning
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown  ">
                                    <a href="javascript:;"><i class="fa fa-file-text-o" aria-hidden="true"></i> Laporan
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown  ">
                                    <a href="javascript:;"><i class="fa fa-cog" aria-hidden="true"></i> Pengaturan
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="dropdown-menu pull-left">
                                        <li aria-haspopup="true" class=" ">
                                            <a href="{{ url('/admin/frontend') }}" class="nav-link  "><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Front Page </a>
                                        </li>
                                        <li aria-haspopup="true" class=" ">
                                            <a href="{{ url('/admin/propinsi') }}" class="nav-link  "><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Setting User </a>
                                        </li>
                                        <li aria-haspopup="true" class=" ">
                                            <a href="{{ url('/admin/kabupaten') }}" class="nav-link  "><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Card User </a>
                                        </li>
                                        <li aria-haspopup="true" class=" ">
                                            <a href="./admin/jurusan" class="nav-link  "><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Setting Rule </a>
                                        </li>
                                        <li aria-haspopup="true" class=" ">
                                            <a href="./prodi" class="nav-link  "><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Berita</a>
                                        </li>
                                       
                                    </ul>  
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-wrapper-row full-height">
        <div class="page-wrapper-middle">
            <div class="page-container">
                <div class="page-content-wrapper">
                    <div class="page-head">
                        <div class="container">
                            <div class="page-title">                                
                                @yield('title')
                            </div>
                        </div>
                    </div>
                    <div class="page-content">
                        <div class="container">
                            <ul class="page-breadcrumb breadcrumb">                                
                                @yield('breadcrumb')
                            </ul>
                            <div class="page-content-inner">
                                <div class="mt-content-body">                                    
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="page-wrapper-row">
        <div class="page-wrapper-bottom">
            <div class="page-footer">
                <div class="container">Copyright &copy; 2017  Kementerian Pertanian
                    <a target="_blank" href="">(Kementan)</a>. All rights reserved
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JS -->
<script src="{!! asset('assets/js/jquery-1.11.2.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('assets/vendors/bootstrap/js/bootstrap.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('assets/vendors/datatables/media/js/jquery.dataTables.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('assets/vendors/datatables/media/js/dataTables.bootstrap.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('assets/vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js') !!}" type="text/javascript"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();

    $('.tanggal').datepicker({
        format: "yyyy",
        autoclose:true
    });

    $('.tglterima').datepicker({
        format: "yyyy-m-d",
        autoclose:true
    });

    $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });

    $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });

    $(".add-more1").click(function(){ 
          var html = $(".copy1").html();
          $(".after-add-more1").after(html);
      });

    $("body").on("click",".remove1",function(){ 
          $(this).parents(".control-group1").remove();
      });
} );
</script>
</body>
</html>
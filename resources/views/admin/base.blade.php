
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>ADMIN Kodig.id</title>
<link rel="icon" href="{{asset('assets2/images/favicon.ico')}} type="image"> <!-- Favicon-->
<link rel="stylesheet" href={{asset('assets2/plugins/bootstrap/css/bootstrap.min.css')}}>
<link rel="stylesheet" href={{asset('assets2/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}/>
<link rel="stylesheet" href={{asset('assets2/plugins/morrisjs/morris.min.css')}} />
<!-- Custom Css -->
<link rel="stylesheet" href={{asset('assets2/css/main.css')}}>
<link rel="stylesheet" href={{asset('assets2/css/color_skins.css')}}>

</head>
<body class="theme-purple">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{asset('assets2/images/logo.svg')}}" width="48" height="48" alt="Oreo"></div>
        <p>Please wait...</p>
    </div>
</div> 
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Top Bar -->
<nav class="navbar p-l-5 p-r-5">
    <ul class="nav navbar-nav navbar-left">
        <li>
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html"><img src="{{asset('assets2/images/logo.svg')}}" width="30" alt="Oreo"><span class="m-l-10">ADMIN</span></a>
            </div>
        </li>
        <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>

            </div>
        </li>

        <li class="nav-item dropdown float-right">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#dashboard"><i class="zmdi zmdi-home m-r-5"></i>Oreo</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">
                            <div class="image"><a href="profile.html"><img src={{asset('assets2/images/profile_av.jpg')}} alt="User"></a></div>
                            <div class="detail">
                                <h4>Michael</h4>
                                <small>UI UX Designer</small>
                            </div>
                        </div>
                    </li>
                    <li class="header">MAIN</li>
                    <li class="active open"> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a>
                        <ul class="ml-menu">
                            <li class="active"><a href="/admin">Dashboard</a> </li>{{-- 
                            <li><a href="#">Posting Artikel</a></li> --}}
                            <li><a href="/transaksi">Transaksi</a></li>
                            <li><a href="/dtransaksi">Detail Transaksi</a></li>
                            <li><a href="/produk">Produk</a></li>
                            <li><a href="/produkatt">Produk Atribut</a></li>
                            <li><a href="/galery">Galery</a></li>
                            <li><a href="/promo">Promo</a></li>{{-- 
                            <li><a href="">Testimoni</a></li> --}}
                            <li><a href="/user">Data Member</a></li>{{-- 
                            <li><a href="">Data Admin</a></li> --}}
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        </div>
    </div>
</aside>


<div class="modal fade" id="ModalBiruSm" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header g-bg-blue" style="padding: 10px;">
                <span class="title" id="ModalBiruSmLabel">
                    Modal Biru
                </span>
            </div>
            <div class="modal-body" >
                <div id="ModalBiruSmIsi">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ModalBiru" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-full" role="document">
        <div class="modal-content">
            <div class="modal-header g-bg-blue" style="padding: 10px;">
                <span class="title" id="ModalBiruLabel">
                    Modal Biru
                </span>
            </div>
            <div class="modal-body" >
                <div id="ModalBiruIsi">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ModalHijau" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-full" role="document">
        <div class="modal-content">
            <div class="modal-header g-bg-cgreen" style="padding: 10px;">
                <span class="title" id="ModalHijauLabel">
                    Modal Hijau
                </span>
            </div>
            <div class="modal-body" >
                <div id="ModalHijauIsi">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ModalEditCeklis" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-full" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <span class="title" id="ModalTambahCeklisLabel">
                EDIT CEKLIS
                </span>
            </div>
            <div class="modal-body">
                <div id="isiModalEditCeklis">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Default Size -->
<div class="modal fade" id="ModalTambahCeklis" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-full" role="document">
        <div class="modal-content">

            <input type="hidden" class="koor_x">
            <input type="hidden" class="koor_y">
            <div class="modal-body isi_modal_tambah_ceklis">
            </div>
        </div>
    </div>
</div>


<!-- START MODAL UPLOAD -->
<div id="modalUploadBerkas" class="modal fade">
    <div class="modal-dialog modal-full">
        <div class="modal-content">
            <div class="modal-header bg-warning" style="padding: 20px !important;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Upload Berkas  </h6>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="isiModalUploadBerkas" style="width: 100% !important;">

                        </div>
                        <div id="isiModalUploadBerkasInfo">

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer"><!--
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cancel-circle2"></i> Tutup</button>  -->
            </div>
        </div>
    </div>
</div>
<!-- END MODAL UPLOAD -->


<!-- Main Content -->

    @yield('content')
<!-- Jquery Core Js -->
<script src="{{asset('assets2/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="{{asset('assets2/bundles/vendorscripts.bundle.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="{{asset('assets2/bundles/morrisscripts.bundle.js')}}"></script><!-- Morris Plugin Js -->
<script src="{{asset('assets2/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{asset('assets2/bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob, Count To, Sparkline Js -->

<script src="{{asset('assets2/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('assets2/js/pages/index.js')}}"></script>
<script type="text/javascript" src="{{asset('js/proses.js')}}"></script>{{--
<script src="../dist/js/bootstrap-select.js"></script> {{-- select boostrap --}} --}}


</body>
</html>

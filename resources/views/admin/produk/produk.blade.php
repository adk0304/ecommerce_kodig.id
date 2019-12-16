@extends('admin/base')
@section('content')
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Oreo :: Product List</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Favicon-->
    <link rel="stylesheet" href="assets2/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Custom Css -->
    <link rel="stylesheet" href="assets2/css/main.css">
    <link rel="stylesheet" href="assets2/css/ecommerce.css">
    <link rel="stylesheet" href="assets2/css/color_skins.css">
    </head>
<section class="content ecommerce-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Product List
                <small>Welcome to Oreo</small>
                </h2>
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card product_item_list">
                    <div class="body table-responsive">
                <button type="button" class="btn btn-default waves-effect m-r-20" onclick="
                            tambah_modal_produk('{{csrf_token()}}', '#ModalBiruSm')">Tambah Produk</button>
                        <table class="table table-hover m-b-0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    {{-- <th>ID</th> --}}
                                    <th>Nama Produk</th>
                                    <th>Jenis Produk</th>
                                    <th>SKU</th>
                                    <th data-breakpoints="sm xs md">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php $no=0; ?>
                                    @foreach ($produk as $p)
                                    @php
                                    $no++;
                                    @endphp
                                    <tr>
                                        <th scope="row">{{$no}}</th>
                                        {{-- <td>{{$p->id}}</td> --}}
                                        <td>{{$p ->nama_produk}}</td>
                                        <td>{{$p ->jenis_produk}}</td>
                                        <td>
                                                @foreach ($p->produkatt as $q)
                                                <button type="button" onclick="
                                            update_modal_SKU('{{csrf_token()}}', '{{ $q->SKU }}', '#ModalBiruSm')
                                                " id="update_modal_SKU" class="btn btn-info waves-effect waves-float waves-green">
                                                {{$q->SKU}}
                                            </button><br>
                                            @endforeach</td>
                                        <td>
                                                {{-- <span>
                                                <button type="button" class="btn btn-default waves-effect m-r-20" onclick="
                                                tambah_modal_SKU('{{csrf_token()}}', '#ModalBiruSm',{{$p->id}})">Tambah SKU</button>
                                                </span> --}}
                                        <span>
                                            <button type="button" onclick="
                                            update_modal_produk('{{csrf_token()}}', '{{ $p->id }}', '#ModalBiruSm')
                                                " id="modal_update_barang" class="btn btn-default waves-effect waves-float waves-green">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button>
                                            <a href="/produk/delete/{{ $p->id }}" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>

                                        </span>

                                    </td>
                                    </tr>
                                    @endforeach
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>


            </div>
        </div>
    </div>
</section>



@endsection

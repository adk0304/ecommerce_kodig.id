
@extends('admin/base')
@section('content')
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Oreo :: Galery List</title>
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
                <h2>Galery List
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
                    tambah_modal_galery('{{csrf_token()}}', '#ModalBiruSm')">Tambah galery</button>
                        <table class="table table-hover m-b-0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>ID </th>
                                    <th>Gambar Produk</th>
                                    <th> SKU</th>
                                    <th data-breakpoints="sm xs md">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php $no=0; ?>
                                    @foreach ($galery as $p)
                                    @php
                                    $no++;
                                    @endphp
                                    <tr>
                                        <th scope="row">{{$no}}</th>
                                        <td>{{$p->id}}</td>
                                        <td><img width="150px" src="{{url('/data_file/'.$p->gambar_produk) }}"></td>
                                        <td><b>{{$p->produkatt['SKU']}}</b> </td>
                                        <td><span>
                                                <button type="button" onclick="
                                                update_modal_galery('{{csrf_token()}}', '{{ $p->id }}', '#ModalBiruSm')
                                                    " id="modal_update_barang" class="btn btn-default waves-effect waves-float waves-green">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                            </span>
                                        <a href="/galery/delete/{{ $p->id }}" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>

<!--MODAL TAMBAH PRODUK Default Size -->

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

<!--MODAL TAMBAH PRODUK Default Size -->

@endsection

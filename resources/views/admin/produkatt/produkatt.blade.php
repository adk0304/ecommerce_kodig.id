
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
                <h2>Product Atribut List
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
                            tambah_modal_produkatt('{{csrf_token()}}', '#ModalBiruSm')">Tambah Produk Atribut</button>
                        <table class="table table-hover m-b-0">
                                <thead>
                                        <tr>
                                                <th>NO</th>
                                                {{-- <th>ID</th> --}}
                                                <th>Nama Produk</th>
                                                <th>SKU</th>
                                                <th>Warna Produk</th>
                                                <th>Jumlah Produk</th>
                                                <th>Stock Produk</th>
                                                <th>Size Produk</th>
                                                <th>Harga Produk</th>
                                                <th>Promo</th>
                                                <th>Gambar</th>

                                            <th data-breakpoints="sm xs md">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php $no=0; ?>
                                            @foreach ($produkatt as $p)
                                            @php
                                            $no++;
                                            @endphp
                                            <tr>
                                                <th scope="row">{{$no}}</th>
                                                {{-- <td>{{$p->id}}</td> --}}
                                                <td>{{$p->produk['nama_produk']}}</td>
                                                <td>{{$p ->SKU}}</td>
                                                <td>{{$p ->warna_produk}}</td>
                                                <td>{{$p ->jumlah_produk}}</td>
                                                <td>{{$p ->stock_produk}}</td>
                                                <td>{{$p ->size_produk}}</td>
                                                <td>@currency($p->harga_produk)</td>

                                               
                                                 <td> @foreach ($p->promo as $q)
                                                    {{$q->nama_promo}}<br>
                                                @endforeach </td>
                                                <td>@foreach($p->galery as $q)
                                                {{-- {{$q->gambar_produk}} --}}
                                                <img width="150px" src="{{url('/data_file/'.$q->gambar_produk) }}">
                                                <br><br>@endforeach
                                                </td>

                                                {{-- <td>{{$p->galery['id']}}</td> --}}
                                                {{-- @foreach($p->galery as $q)
                                                <td><img width="150px" src="{{url('/data_file/'.$q->gambar_produk) }}"></td>
                                                <td>{{$q->id}}</td>
                                                @endforeach--}}

                                                <td>
                                                    <span>
                                                    <button type="button" onclick="
                                                    update_modal_produkatt('{{csrf_token()}}', '{{ $p->id }}', '#ModalBiruSm')
                                                        " id="modal_update_produkatt" class="btn btn-default waves-effect waves-float waves-green">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                </span>
                                                <a href="/produkatt/delete/{{ $p->id }}" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
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





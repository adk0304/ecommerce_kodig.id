
@extends('admin/base')
@section('content')
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Oreo :: PROMO</title>
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
                <h2>Transaksi
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
                        tambah_modal_transaksi('{{csrf_token()}}', '#ModalBiruSm')">Tambah Transaksi</button>
                        <table class="table table-hover m-b-0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Nomor Transaksi</th>
                                    <th>user</th>
                                    <th>email</th>
                                    <th>Tanggal transaksi</th>
                                    <th>Total Harga</th>
                                    <th>Alamat Kirim</th>  
                                    <th>Status</th>{{-- 
                                    <th>Invoice</th>
                                    <th>Keterangan</th>
                                    <th>Tanggal Verif</th>
                                    <th>Bukti Tf</th>
                                     --}}
                                    <th data-breakpoints="sm xs md">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php $no=0; ?>
                                    @foreach ($transaksi as $p)
                                    @php
                                    $no++;
                                    @endphp
                                    <tr>
                                        <th scope="row">{{$no}}</th>
                                        <td>{{$p ->nomor_transaksi}}</td>
                                        <td>{{$p ->user['name']}}</td>
                                        <td>{{$p ->user['email']}}</td>
                                        <td>{{$p ->tgl_transaksi}}</td>
                                        <td>@currency($p->total_harga)</td>
                                        <td>{{$p ->alamat_kirim}}</td> 
                                        @if($p->status==1)
                                        <td><b>Verif</b></td>
                                        @else
                                        <td>belum verif</td> 
                                        @endif
                                        
                                        <td>

                                        <span>
                                            <button type="button" onclick="
                                            update_modal_transaksi('{{csrf_token()}}', '{{ $p->id }}', '#ModalBiruSm')
                                                "  class="btn btn-success waves-effect waves-float waves-green ">
                                                <i class="zmdi zmdi-badge-check"></i>
                                            </button> 
                                           
                                           <button type="button" onclick="
                                                    update_modal_transaksi2('{{csrf_token()}}', '{{ $p->id }}', '#ModalBiruSm')
                                                "   class="btn btn-info waves-effect waves-float waves-green ">
                                                <i class="zmdi zmdi-assignment"></i>
                                            </button> 
                                            
                                            <a href="/transaksi/delete/{{ $p->id }}" class="btn btn-danger waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
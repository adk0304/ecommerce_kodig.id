
@extends('frontend.layouts.master')
@section('content')
<div class="c-layout-page">
        <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
        <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
            <div class="container">
                <div class="c-page-title c-pull-left">
                    <h3 class="c-font-uppercase c-font-sbold">Checkout Complete</h3>
                    <h4 class="">Page Sub Title Goes Here</h4>
                </div>
                <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                    <li>
                        <a href="shop-checkout-complete.html">Checkout Complete</a>
                    </li>
                    <li>/</li>
                    <li class="c-state_active">Jango Components</li>
                </ul>
            </div>
        </div>
        <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
        <!-- BEGIN: PAGE CONTENT -->
        <div class="c-content-box c-size-lg c-overflow-hide c-bg-white">
            <div class="container">
                
                <div class="c-shop-order-complete-1 c-content-bar-1 c-align-left c-bordered c-theme-border c-shadow">
                    <div class="c-content-title-1">
                        <h3 class="c-center c-font-uppercase c-font-bold">Checkout Completed</h3>
                        <div class="c-line-center c-theme-bg"></div>
                    </div>
                    <div class="c-theme-bg">
                        <p class="c-message c-center c-font-white c-font-20 c-font-sbold">
                            <i class="fa fa-check"></i> Thank you. Your order has been received. </p>
                    </div>
                    
                    <!-- BEGIN: ORDER SUMMARY -->
                    <div class="row c-order-summary c-center">
                            @foreach($data as $p)
                        <ul class="c-list-inline list-inline">
                            <li>
                                <h3>Order Number</h3>
                                
                                
                                <h1># {{$p->nomor_transaksi}}</h1>
                                
                            </li>
                            <li>
                                <h3>Date Purchased</h3>
                                <p>{{$p->tgl_transaksi}}</p>
                            </li>
                            <li>
                                <h3>Total Payable</h3>
                                <p>$ {{$p->total_harga}}</p>
                            </li>
                            <li>
                                <h3>Address</h3>
                                <p> {{$p->alamat_kirim}} </p>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                    transfer ke rekening :
                    herlambang
                    <p>938473984723948239487</p>
                    
                    
                
                    <!-- END: ORDER SUMMARY -->
                    <!-- BEGIN: BANK DETAILS -->

                    <!-- END: CUSTOMER DETAILS -->
                </div>
            </div>
        </div>
        <!-- END: PAGE CONTENT -->
    </div>

    @endsection
    
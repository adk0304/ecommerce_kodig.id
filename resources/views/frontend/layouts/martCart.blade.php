@extends('frontend.layouts.master')
@section('content')

<div class="c-layout-page">
        <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
        <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
            <div class="container">
                <div class="c-page-title c-pull-left">
                    <h3 class="c-font-uppercase c-font-sbold">Cart</h3>
                    <h4 class="">Page Sub Title Goes Here</h4>
                </div>
                <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                    <li>
                        <a href="shop-cart.html">Shopping Cart</a>
                    </li>
                    <li>/</li>
                    <li class="c-state_active">Jango Components</li>
                </ul>
            </div>
        </div>
        <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
        <!-- BEGIN: PAGE CONTENT -->
        <!-- BEGIN: CONTENT/SHOPS/SHOP-CART-1 -->
        <div class="c-content-box c-size-lg">
            <div class="container">
                @if(session('success'))

                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
            
                @endif

                <div class="c-shop-cart-page-1">
                    <div class="row c-cart-table-title">
                        <div class="col-md-2 c-cart-image">
                           </div>
                        <div class="col-md-4 c-cart-desc">
                            <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Detail</h3>
                        </div>
                        
                        <div class="col-md-1 c-cart-qty">
                            <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Qty</h3>
                        </div>
                        <div class="col-md-2 c-cart-price">
                            <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Unit Price</h3>
                        </div>
                        <div class="col-md-1 c-cart-total">
                            <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Total</h3>
                        </div>
                        <div class="col-md-1 c-cart-remove"></div>
                    </div>
                    <!-- BEGIN: SHOPPING CART ITEM ROW -->
                    
                    <div class="row c-cart-table-row">

                        <?php $total = 0?>

                        @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                        
                        <?php $total += $details['price'] * $details['quantity'] ?>
                     
                        
                        <div class="col-md-2 col-sm-3 col-xs-5 c-cart-image">
                            </div>
                        <div class="col-md-4 col-sm-9 col-xs-7 c-cart-desc">
                            <h3>
                                <a href="shop-product-details-2.html" class="c-font-bold c-theme-link c-font-22 c-font-dark">{{ $details['name'] }}</a>
                            </h3>
                            
                        </div>
  
                        <div class="col-md-1 col-sm-3 col-xs-6 c-cart-qty">
                            <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">QTY</p>
                            <div >
                                <input type="number" class="form-control quantity" value="{{ $details['quantity'] }}">
                                
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-6 c-cart-price">
                            <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Unit Price</p>
                            <p class="c-cart-price c-font-bold">$ {{ $details['price'] }}</p>
                        </div>
                        <div class="col-md-1 col-sm-3 col-xs-6 c-cart-total">
                            <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Total</p>
                            <p class="c-cart-price c-font-bold">$ {{ $details['price'] * $details['quantity'] }}</p>
                        </div>
                        <div class="col-md-1 col-sm-12 c-cart-remove">
                            <a href="#" class="btn btn-info btn-sm update-cart">Update</a>
                            <a href="#" class="c-cart-remove-mobile btn c-btn c-btn-md c-btn-square c-btn-red c-btn-border-1x c-font-uppercase">Remove item from Cart</a>
                        </div>
                        <div class="col-md-1 col-sm-12 c-cart-remove">
                                <a href="#" class="btn btn-danger btn-sm remove-from-cart">Delete</a>
                                <a href="#" class="c-cart-remove-mobile btn c-btn c-btn-md c-btn-square c-btn-red c-btn-border-1x c-font-uppercase">Remove item from Cart</a>
                            </div>
                    
                    @endforeach
                    @endif
                    </div>
                
                    <!-- END: SHOPPING CART ITEM ROW -->
                    <!-- BEGIN: SHOPPING CART ITEM ROW -->
   
                    <!-- END: SHOPPING CART ITEM ROW -->
                    <!-- BEGIN: SUBTOTAL ITEM ROW -->
                    <div class="row">
                        <div class="c-cart-subtotal-row c-margin-t-20">
                            <div class="col-md-2 col-md-offset-9 col-sm-6 col-xs-6 c-cart-subtotal-border">
                                <h3 class="c-font-uppercase c-font-bold c-right c-font-16 c-font-grey-2">Subtotal</h3>
                            </div>
                            <div class="col-md-1 col-sm-6 col-xs-6 c-cart-subtotal-border">
                                <h3 class="c-font-bold c-font-16">$ {{ $total }}</h3>
                            </div>
                        </div>
                    </div>
                    <!-- END: SUBTOTAL ITEM ROW -->
                    <!-- BEGIN: SUBTOTAL ITEM ROW -->
              
                    <!-- END: SUBTOTAL ITEM ROW -->
                    <!-- BEGIN: SUBTOTAL ITEM ROW -->
                    <div class="row">
                        <div class="c-cart-subtotal-row">
                            <div class="col-md-2 col-md-offset-9 col-sm-6 col-xs-6 c-cart-subtotal-border">
                                <h3 class="c-font-uppercase c-font-bold c-right c-font-16 c-font-grey-2">Total</h3>
                            </div>
                            <div class="col-md-1 col-sm-6 col-xs-6 c-cart-subtotal-border">
                                <h3 class="c-font-bold c-font-16">$ {{ $total }}</h3>
                            </div>
                        </div>
                    </div>
                    <!-- END: SUBTOTAL ITEM ROW -->
                    <div class="c-cart-buttons">
                        <a href="/mart" class="btn c-btn btn-lg c-btn-red c-btn-square c-font-white c-font-bold c-font-uppercase c-cart-float-l">Continue Shopping</a>
                        @if(Auth::check())
                        <a href="/checkout" class="btn c-btn btn-lg c-theme-btn c-btn-square c-font-white c-font-bold c-font-uppercase c-cart-float-r">Checkout</a>
                        @else 
                        
                        <a href="javascript:;" data-toggle="modal" data-target="#login-form" class="btn c-btn btn-lg c-theme-btn c-btn-square c-font-white c-font-bold c-font-uppercase c-cart-float-r">Checkout</a>      
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="c-content-box c-size-md c-theme-bg">
                <div class="container">
                    <div class="c-content-step-3 c-font-white">
                        <div class="row">
                            <div class="col-md-4 c-steps-3-block">
                                <i class="fa fa-truck"></i>
                                <div class="c-steps-3-title">
                                    <h2 class="c-font-white c-font-uppercase c-font-30 c-font-thin">Free shipping</h2>
                                    <em>Express delivery withing 3 days</em>
                                </div>
                                <span>&nbsp;</span>
                            </div>
                            <div class="col-md-4 c-steps-3-block">
                                <i class="fa fa-gift"></i>
                                <div class="c-steps-3-title">
                                    <h2 class="c-font-white c-font-uppercase c-font-30 c-font-thin">Daily Gifts</h2>
                                    <em>3 Gifts daily for lucky customers</em>
                                </div>
                                <span>&nbsp;</span>
                            </div>
                            <div class="col-md-4 c-steps-3-block">
                                <i class="fa fa-phone"></i>
                                <div class="c-steps-3-title">
                                    <h2 class="c-font-white c-font-uppercase c-font-30 c-font-thin">477 505 8877</h2>
                                    <em>24/7 customer care available</em>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- END: CONTENT/SHOPS/SHOP-CART-1 -->
        <!-- BEGIN: CONTENT/SHOPS/SHOP-2-2 -->
        <div class="c-content-box c-size-md c-overflow-hide c-bs-grid-small-space">
            <div class="container">
                <div class="c-content-title-4">
                    <h3 class="c-font-uppercase c-center c-font-bold c-line-strike">
                        <span class="c-bg-white">Most Popular</span>
                    </h3>
                </div>
                <div class="row">
                    <div data-slider="owl">
                        <div class="owl-carousel owl-theme c-theme owl-small-space c-owl-nav-center" data-rtl="false" data-items="4" data-slide-speed="8000">
                                @foreach($produkatt as $produkatt)
                                <div class="item">
                                        <div class="c-content-product-2 c-bg-white c-border">
                                                <div class="c-content-overlay">
                                                    <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                                                    <div class="c-overlay-wrapper">
                                                        <div class="c-overlay-content">
                                                        <a href="{{route('detail/{id}', ['id'=> $produkatt->id])}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                                        </div>
                                                    </div>
                                                    @foreach($produkatt->galery as $q)
                                                    <div class="c-bg-img-center c-overlay-object"  style="height: 230px; "><img height="225" src="{{url('/data_file/'.$q->gambar_produk) }}">
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div class="c-info">
                                                    
                                                    <p class="c-title c-font-16 c-font-slim">Nama : {{$produkatt->Produk['nama_produk']}}</p>
                                                 
                                                    <p class="c-title c-font-16 c-font-slim">Warna : {{$produkatt->warna_produk}}</p>
                                                    <p class="c-title c-font-16 c-font-slim">Stock : {{$produkatt->stock_produk}}</p>
                                                    <p class="c-price c-font-14 c-font-slim">Rp {{$produkatt->harga_produk}} &nbsp;
            
                                                    </p>
                                                </div>
                                                <div class="btn-group btn-group-justified" role="group">
                                                    
                                                    <div class="btn-group c-border-left c-border-top" role="group">
                                                    <a href="{{ url('add-to-cart/'.$produkatt->id) }}" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/SHOPS/SHOP-2-2 -->
        <!-- BEGIN: CONTENT/STEPS/STEPS-3 -->

        <!-- END: CONTENT/STEPS/STEPS-3 -->
        <!-- END: PAGE CONTENT -->
    </div>
    @endsection
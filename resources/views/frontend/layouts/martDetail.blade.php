@extends('frontend.layouts.master')
@section('content')

<div class="c-layout-page">

    <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
    <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
        <div class="container">
            <div class="c-page-title c-pull-left">
                <h3 class="c-font-uppercase c-font-sbold">Product Details 2</h3>
                <h4 class="">Page Sub Title Goes Here</h4>
            </div>
            <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                <li>
                    <a href="shop-product-details-2.html">Product Details 2</a>
                </li>
                <li>/</li>
                <li class="c-state_active">Jango Components</li>
            </ul>
        </div>
    </div>
    <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
    <!-- BEGIN: PAGE CONTENT -->
    <!-- BEGIN: CONTENT/SHOPS/SHOP-PRODUCT-DETAILS-2 -->
    <div class="c-content-box c-size-lg c-overflow-hide c-bg-white">
        <div class="container">
            <div class="c-shop-product-details-2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="c-product-gallery">
                            @foreach($produkatt->galery as $q)
                            <div class="c-product-gallery-content">
                                    <img src="{{url('/data_file/'.$q->gambar_produk) }}" />
                            </div>
                            @endforeach
                          
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="c-product-meta">
                            <div class="c-content-title-1">
                                <h3 class="c-font-uppercase c-font-bold" >{{$data->Produk['nama_produk']}}</h3>
                                <div class="c-line-left"></div>
                            </div>
                            <div class="c-product-badge">
                                <div class="c-product-sale">Sale</div>
                                <div class="c-product-new">New</div>
                            </div>
                            <div class="c-product-review">
                                
                            </div>
                            <div class="c-product-price">Rp. {{$data->harga_produk}}</div>
                            <div class="row c-product-variant">
                                <div class="col-sm-12 col-xs-12">
                                    <p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Size:</p>
                                    <div class="c-product-size">
                                        <select>
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">XL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-12 c-margin-t-20">
                                    <div class="c-product-color">
                                        <p class="c-product-meta-label c-font-uppercase c-font-bold">Color:</p>
                                        <select>
                                            <option value="Red">Red</option>
                                            <option value="Black">Black</option>
                                            <option value="Beige">Beige</option>
                                            <option value="White">White</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="c-product-add-cart c-margin-t-20">
                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="c-input-group c-spinner">
                                            <p class="c-product-meta-label c-product-margin-2 c-font-uppercase c-font-bold">QTY:</p>
                                            <input type="text" class="form-control c-item-1" value="1">
                                            <div class="c-input-group-btn-vertical">
                                                <button class="btn btn-default" type="button" data_input="c-item-1">
                                                    <i class="fa fa-caret-up"></i>
                                                </button>
                                                <button class="btn btn-default" type="button" data_input="c-item-1">
                                                    <i class="fa fa-caret-down"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xs-12 c-margin-t-20">
                                        <a href="{{ url('add-to-cart/'.$data->id) }}"><button  class="btn c-btn btn-lg c-font-bold c-font-white c-theme-btn c-btn-square c-font-uppercase">Add to Cart</button>
                                        </a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: CONTENT/SHOPS/SHOP-PRODUCT-DETAILS-2 -->
    <!-- BEGIN: CONTENT/SHOPS/SHOP-PRODUCT-TAB-1 -->
   
    <!-- END: CONTENT/SHOPS/SHOP-PRODUCT-TAB-1 -->
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
    <!-- END: PAGE CONTENT -->
</div>
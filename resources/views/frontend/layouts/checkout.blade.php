@extends('frontend.layouts.master')
@section('content')
<div class="c-layout-page">
            <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
            <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
                <div class="container">
                    <div class="c-page-title c-pull-left">
                        <h3 class="c-font-uppercase c-font-sbold">Checkout</h3>
                        <h4 class="">Page Sub Title Goes Here</h4>
                    </div>
                    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                        <li>
                            <a href="shop-checkout.html">Checkout</a>
                        </li>
                        <li>/</li>
                        <li class="c-state_active">Jango Components</li>
                    </ul>
                </div>
            </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
            <!-- BEGIN: PAGE CONTENT -->
            <div class="c-content-box c-size-lg">
                <div class="container">
                    
                    <form class="c-shop-form-1" action="{{url('/buat_transaksi')}}" method="POST">
                        <?php
                        $tgl=date('Y-m-d');
                        echo $tgl;
                        $code=date('hs');
                        echo $code;
                        ?>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="nomor_transaksi" value="{{$code}}0{{Auth::user()->id}}">
                        <input type="hidden" name="tgl_transaksi" value="{{$tgl}}">
                        <input type="hidden" name="status" value="0">
                        
                           
                        <div class="row">
                            
                            
                            <!-- BEGIN: ADDRESS FORM -->
                            <div class="col-md-7 c-padding-20">
                                <!-- BEGIN: BILLING ADDRESS -->
                                <h3 class="c-font-bold c-font-uppercase c-font-24">Billing Address</h3>
                                
                           
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="control-label">Name</label>
                                        <input type="text" class="form-control c-square c-theme" placeholder="Name" value="{{ Auth::user()->name }}"> </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="control-label">Address</label>
                                        <input name="alamat_kirim" type="text" class="form-control c-square c-theme" placeholder="Street Address" value="{{ Auth::user()->alamat }}"> </div>
                                </div>
                                
                          
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Email Address</label>
                                                <input type="email" class="form-control c-square c-theme" placeholder="Email Address" value="{{ Auth::user()->email }}"> </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Phone</label>
                                                <input type="tel" class="form-control c-square c-theme" placeholder="Phone" value="{{ Auth::user()->no_telp }}"> </div>
                                        </div>
                                    </div>
                                </div>
   
                       
                                <!-- BILLING ADDRESS -->
                                <!-- SHIPPING ADDRESS -->
                          
                                <!-- SHIPPING ADDRESS -->
                             
                            </div>
                            <!-- END: ADDRESS FORM -->
                            <!-- BEGIN: ORDER FORM -->
                            <div class="col-md-5">
                                <div class="c-content-bar-1 c-align-left c-bordered c-theme-border c-shadow">
                                    <h1 class="c-font-bold c-font-uppercase c-font-24">Your Order</h1>
                                    <ul class="c-order list-unstyled">
                                        <li class="row c-margin-b-15">
                                            <div class="col-md-3 c-font-20">
                                                <h2>Product</h2>
                                            </div>

                                            <div class="col-md-3 c-font-20">
                                                <h2>Qty</h2>
                                            </div>
                                            
                                            <div class="col-md-4 c-font-20">
                                                <h2>Total</h2>
                                            </div>
                                        </li>
                                        <?php $total = 0 ?>

                                        @if(session('cart'))
                                 @foreach(session('cart') as $id => $details)
                                 <?php $total += $details['price'] * $details['quantity'] ?>

                                        <li class="row c-border-bottom"></li>
                                        <li class="row c-margin-b-15 c-margin-t-15">
                                            <input type="hidden" name="satuan_barang[]" value="{{ $details['quantity'] }}">
                                            <input type="hidden" name="sub_harga[]" value="{{ $details['price'] * $details['quantity'] }}">
                                            
                                            
                                            <input type="hidden" name="produk_id[]" value="{{$details['idne']}}">
                                            
                                            <div class="col-md-3 c-font-20">
                                                    <a href="#" class="c-font-bold c-theme-link c-font-22 c-font-dark">{{ $details['name'] }}</a>
                            
                                            </div>

                                            <div class="col-md-3 c-font-20">
                                                <a href="#" class="c-font-bold c-theme-link c-font-22 c-font-dark">{{ $details['quantity'] }} Set</a>
                        
                                            </div>

                                            <div class="col-md-6 c-font-20">
                                                
                                                <p class="" >$ {{ $details['price'] * $details['quantity'] }}</p>
                                            </div>
                                        </li>
                                        @endforeach
                                        @endif
                                      
                                        <li class="row c-margin-b-15 c-margin-t-15">
                                            <div class="col-md-6 c-font-20">Subtotal</div>
                                            <div class="col-md-6 c-font-20">
                                                <p class="">$
                                                    <span class="c-subtotal"> {{ $total }}</span>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="row c-border-top c-margin-b-15"></li>
                                        
                                        <li class="row c-margin-b-15 c-margin-t-15">
                                            <div class="col-md-6 c-font-20">
                                                <p class="c-font-30">Total</p>
                                            </div>
                                            <div class="col-md-6 c-font-20">
                                                <p class="c-font-bold c-font-30">$
                                                    <span class="c-shipping-total">{{ $total }}</span>
                                                    <input type="hidden" name="total_harga" value="{{ $total }}">
                        
                                                </p>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-md-12">
                                                <div class="c-radio-list">
                                                    <div class="c-radio">
                                                        <input type="radio" id="radio1" class="c-radio" name="payment" checked="">
                                                        <label for="radio1" class="c-font-bold c-font-20">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Direct Bank Transfer </label>
                                                        <p class="help-block">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                    </div>
                                                    
                                                    <div class="c-radio">
                                                        <input type="radio" id="radio3" class="c-radio" name="payment">
                                                        <label for="radio3" class="c-font-bold c-font-20">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Payment Gateway </label>
                                                        <img class="img-responsive" width="250" src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png" /> </div>
                                                </div>
                                            </div>
                                        </li>
                                        
                                       
                                        <div class="c-cart-buttons">
                                                <button type="submit" class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Submit</a>
                       
                                            
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <!-- END: ORDER FORM -->
                        </div>
                    </form>
                
                </div>
            </div>
            <!-- END: PAGE CONTENT -->
</div>
@endsection
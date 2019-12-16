@extends('frontend.layouts.master')
@section('content')

        <div class="c-layout-page">
            <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
            <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
                <div class="container">
                    <div class="c-page-title c-pull-left">
                        <h3 class="c-font-uppercase c-font-sbold">Order History </h3>
                        <h4 class="">Page Sub Title Goes Here</h4>
                    </div>
                    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                        <li>
                            <a href="shop-order-history-2.html">Order History </a>
                        </li>
                        <li>/</li>
                        <li class="c-state_active">Jango Components</li>
                    </ul>
                </div>
            </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
            <div class="container">
                <div class="c-layout-sidebar-menu c-theme ">
                    <!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
                    <div class="c-sidebar-menu-toggler">
                        <h3 class="c-title c-font-uppercase c-font-bold">My Profile</h3>
                        <a href="javascript:;" class="c-content-toggler" data-toggle="collapse" data-target="#sidebar-menu-1">
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                        </a>
                    </div>
                    <ul class="c-sidebar-menu collapse " id="sidebar-menu-1">
                        <li class="c-dropdown c-open">
                            <a href="javascript:;" class="c-toggler">My Profile
                                <span class="c-arrow"></span>
                            </a>
                            <ul class="c-dropdown-menu">
                                <li class="">
                                    <a href="/dashboard">My Dashbord</a>
                                </li>
                                
                                
        
                                <li class="c-active">
                                <a href="{{'myorder'}}">My Order </a>
                                </li>
                               
                               
                            </ul>
                        </li>
                    </ul>
                    <!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
                </div>
                <div class="c-layout-sidebar-content ">
                    <!-- BEGIN: PAGE CONTENT -->
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-ORDER-HISTORY-2 -->
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">Order History</h3>
                    </div>
                    <div class="row c-margin-b-40 c-order-history-2">
                        <div class="row c-cart-table-title">
                            <div class="col-md-2 c-cart-image">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Order</h3>
                            </div>
                            <div class="col-md-2 c-cart-ref">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Date</h3>
                            </div>
                            <div class="col-md-2 c-cart-desc">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Price</h3>
                            </div>
                            <div class="col-md-2 c-cart-price">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Address</h3>
                            </div>
                            <div class="col-md-1 c-cart-total">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Status</h3>
                            </div>
                            <div class="col-md-2 c-cart-qty">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Action</h3>
                            </div>
                        </div>
                        <!-- BEGIN: ORDER HISTORY ITEM ROW -->
                        @foreach($ord as $q)
                        <div class="row c-cart-table-row">
                            <h2 class="c-font-uppercase c-font-bold c-theme-bg c-font-white c-cart-item-title c-cart-item-first">Item 1</h2>
                            <div class="col-md-2 col-sm-3 col-xs-5 c-cart-image">
                                    <p>#{{$q->nomor_transaksi}}</p> </div>
                            <div class="col-md-2 col-sm-3 col-xs-6 c-cart-ref">
                                    <p>
                                            <a  class="c-font-bold  c-font-dark">{{$q->tgl_transaksi}}</a>
                                        </p>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 c-cart-desc">
                                    <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Price</p>
                                    <p class="c-cart-price c-font-bold">$ {{$q->total_harga}}</p>
                            </div>
                            <div class="clearfix col-md-2 col-sm-3 col-xs-6 c-cart-price">
                                <p class="c-cart-price c-font-bold">{{$q->alamat_kirim}}</p>
                            </div>
                            @if($q->status==0)
                            <div class="col-md-1 col-sm-3 col-xs-6 c-cart-total">
                                <p class="c-cart-price c-font-bold">Pending</p>
                            </div>
                            @else
                            <div class="col-md-1 col-sm-3 col-xs-6 c-cart-total">
                                    <p class="c-cart-price c-font-bold">Success</p>
                            </div>
                            @endif
                            
                            <div class="col-md-2 col-sm-3 col-xs-6 c-cart-qty">
                                <p><button type="button" class="btn btn-light">Detail</button></p>
                                <p><button type="button" data-target="#ModalUpload" data-toggle="modal" class="btn btn-info">Upload</button></p>
                            </div>
                        </div>
                        @endforeach

                        <!-- END: ORDER HISTORY ITEM ROW -->
                    </div>
                    <!-- END: CONTENT/SHOPS/SHOP-ORDER-HISTORY-2 -->
                    <!-- END: PAGE CONTENT -->
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="ModalUpload" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Upload Photo Transfer</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                            <form action="{{route('up_trans')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" name="file" class="custom-file-input" id="inputGroupFile01"
                                        aria-describedby="inputGroupFileAddon01">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                  </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
                  </div>
                </div>
              </div>
@endsection
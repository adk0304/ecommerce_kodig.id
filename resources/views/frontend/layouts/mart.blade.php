@extends('frontend.layouts.master')
@section('content')


        <div class="c-layout-page">
            <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
            <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
                <div class="container">
                    <div class="c-page-title c-pull-left">
                        <h3 class="c-font-uppercase c-font-sbold">Product Grid</h3>
                        <h4 class="">Page Sub Title Goes Here</h4>
                    </div>
                    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                        <li>
                            <a href="shop-product-grid.html">Product Grid</a>
                        </li>
                        <li>/</li>
                        <li class="c-state_active">Jango Components</li>
                    </ul>
                </div>
            </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
            <div class="container">
                <div class="c-layout-sidebar-menu c-theme ">
                    <!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-MENU -->
                    <div class="c-sidebar-menu-toggler">
                        <h3 class="c-title c-font-uppercase c-font-bold">Navigation</h3>
                        <a href="javascript:;" class="c-content-toggler" data-toggle="collapse" data-target="#sidebar-menu-1">
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                        </a>
                    </div>
                    <ul class="c-shop-filter-search-1 list-unstyled">
                        <li>
                            <label class="control-label c-font-uppercase c-font-bold">Category</label>
                            <select class="form-control c-square c-theme">
                                <option value="0">All Categories</option>
                                <option value="1">Art</option>
                                <option value="2">Baby</option>
                                <option value="3">Books</option>
                                <option value="4">Business &amp; Industrial</option>
                                <option value="5">Cameras &amp; Photo</option>
                                <option value="6">Cell Phones &amp; Accessories</option>
                                <option value="7">Clothing, Shoes &amp; Accessories</option>
                                <option value="8">Coins &amp; Paper Money</option>
                                <option value="9">Collectibles</option>
                                <option value="10">Computers/Tablets &amp; Networking</option>
                            </select>
                        </li>
                        <li>
                            <label class="control-label c-font-uppercase c-font-bold">Availability</label>
                            <div class="c-checkbox">
                                <input type="checkbox" id="checkbox-sidebar-3-1" class="c-check">
                                <label for="checkbox-sidebar-3-1">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    <p>Not Available (3)</p>
                                </label>
                            </div>
                            <div class="c-checkbox c-checkbox-height">
                                <input type="checkbox" id="checkbox-sidebar-3-2" class="c-check">
                                <label for="checkbox-sidebar-3-2">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    <p>In Stock (23)</p>
                                </label>
                            </div>
                        </li>
                        <li>
                            <label class="control-label c-font-uppercase c-font-bold">Price Range</label>
                            <div class="c-price-range-box input-group">
                                <div class="c-price input-group col-md-6 pull-left">
                                    <span class="input-group-addon c-square c-theme">$</span>
                                    <input type="text" class="form-control c-square c-theme" placeholder="from"> </div>
                                <div class="c-price input-group col-md-6 pull-left">
                                    <span class="input-group-addon c-square c-theme">$</span>
                                    <input type="text" class="form-control c-square c-theme" placeholder="to"> </div>
                            </div>
                        </li>
                        <li>
                            <label class="control-label c-font-uppercase c-font-bold">Price Range Slider Color</label>
                            <p>Price Range: $1 - $ 500</p>
                            <div class="c-price-range-slider c-theme-1 input-group">
                                <input type="text" class="c-price-slider" value="" data-slider-min="1" data-slider-max="500" data-slider-step="1" data-slider-value="[100,250]"> </div>
                        </li>
                        <li>
                            <label class="control-label c-font-uppercase c-font-bold">Price Range Slider Color</label>
                            <p>Price Range: $1 - $ 500</p>
                            <div class="c-price-range-slider c-theme-2 input-group">
                                <input type="text" class="c-price-slider" value="" data-slider-handle="square" data-slider-min="1" data-slider-max="500" data-slider-step="1" data-slider-value="[100,250]"> </div>
                        </li>
                        <li>
                            <label class="control-label c-font-uppercase c-font-bold">Price Group</label>
                            <div class="input-group">
                                <div class="c-checkbox">
                                    <input type="checkbox" id="checkbox-sidebar-1-1" class="c-check">
                                    <label for="checkbox-sidebar-1-1">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> $0 - $10 (15) </label>
                                </div>
                                <div class="c-checkbox">
                                    <input type="checkbox" id="checkbox-sidebar-1-2" class="c-check">
                                    <label for="checkbox-sidebar-1-2">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> $11 - $20 (17) </label>
                                </div>
                                <div class="c-checkbox">
                                    <input type="checkbox" id="checkbox-sidebar-1-3" class="c-check">
                                    <label for="checkbox-sidebar-1-3">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> $21 - $30 (23) </label>
                                </div>
                                <div class="c-checkbox c-checkbox-height">
                                    <input type="checkbox" id="checkbox-sidebar-1-4" class="c-check">
                                    <label for="checkbox-sidebar-1-4">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> $31 - $40 (19) </label>
                                </div>
                            </div>
                        </li>

                    </ul>

                    <!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-MENU -->
                </div>
                <div class="c-layout-sidebar-content ">
                    <!-- BEGIN: PAGE CONTENT -->
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-RESULT-FILTER-1 -->
                    <div class="c-shop-result-filter-1 clearfix form-inline">
                        <div class="c-filter">
                            <label class="control-label c-font-16">Show:</label>
                            <select class="form-control c-square c-theme c-input">
                                <option value="#?limit=24" selected="selected">24</option>
                                <option value="#?limit=25">25</option>
                                <option value="#?limit=50">50</option>
                                <option value="#?limit=75">75</option>
                                <option value="#?limit=100" selected>100</option>
                            </select>
                        </div>
                        <div class="c-filter">
                            <label class="control-label c-font-16">Sort&nbsp;By:</label>
                            <select class="form-control c-square c-theme c-input">
                                <option value="#?sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
                                <option value="#?sort=pd.name&amp;order=ASC">Name (A - Z)</option>
                                <option value="#?sort=pd.name&amp;order=DESC">Name (Z - A)</option>
                                <option value="#?sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
                                <option value="#?sort=p.price&amp;order=DESC" selected>Price (High &gt; Low)</option>
                                <option value="#?sort=rating&amp;order=DESC">Rating (Highest)</option>
                                <option value="#?sort=rating&amp;order=ASC">Rating (Lowest)</option>
                                <option value="#?sort=p.model&amp;order=ASC">Model (A - Z)</option>
                                <option value="#?sort=p.model&amp;order=DESC">Model (Z - A)</option>
                            </select>
                        </div>
                    </div>
                    <!-- END: CONTENT/SHOPS/SHOP-RESULT-FILTER-1 -->
                    <div class="c-margin-t-20"></div>
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-2-7 -->
                    <div class="c-bs-grid-small-space">
                         
                        <div class="row">
                            @foreach($produkatt as $produkatt)
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
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
                    <!-- END: CONTENT/SHOPS/SHOP-2-7 -->
                    <div class="c-margin-t-20"></div>
                    
                    <!-- END: PAGE CONTENT -->
                </div>
                <ul class="c-content-pagination c-square c-theme pull-right">
                        <li class="c-prev">
                            <a href="#">
                                <i class="fa fa-angle-left"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li class="c-active">
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li class="c-next">
                            <a href="#">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
            </div>
        </div>
        <!-- END: PAGE CONTAINER -->
        <!-- BEGIN: LAYOUT/FOOTERS/FOOTER-6 -->
@endsection
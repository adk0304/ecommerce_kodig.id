@extends('frontend.layouts.master')
@section('content')


        <!-- END: CONTENT/USER/LOGIN-FORM -->
        <!-- BEGIN: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->

        <!-- END: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
            <!-- BEGIN: PAGE CONTENT -->
            <!-- BEGIN: LAYOUT/SLIDERS/REVO-SLIDER-4 -->
            <section class="c-layout-revo-slider c-layout-revo-slider-4" dir="ltr">
                <div class="tp-banner-container c-theme">
                    <div class="tp-banner rev_slider" data-version="5.0">
                        <ul>
                            <!--BEGIN: SLIDE #1 -->
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                                <img alt="" width="1024px" height="512px" src="{{asset('data_file/glayout/banner1.png')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                                <div class="tp-caption customin customout" data-x="center" data-y="center" data-hoffset="" data-voffset="-50" data-speed="500" data-start="1000" data-transform_idle="o:1;" data-transform_in="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                                data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600">
                                    
                                </div>
                                <div class="tp-caption lft" data-x="center" data-y="center" data-voffset="110" data-speed="900" data-start="2000" data-transform_idle="o:1;" data-transform_in="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                                data-transform_out="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;">
                                    <a href="#" class="c-action-btn btn btn-lg c-btn-square c-theme-btn c-btn-bold c-btn-uppercase">Learn More</a>
                                </div>
                            </li>
                            <!--END -->
                            <!--BEGIN: SLIDE #2 -->

                            <!--END -->
                        </ul>
                    </div>
                </div>
            </section>
            <!-- END: LAYOUT/SLIDERS/REVO-SLIDER-4 -->
            <!-- BEGIN: CONTENT/FEATURES/FEATURES-1 -->

            <!-- END: CONTENT/FEATURES/FEATURES-1 -->
            <!-- BEGIN: CONTENT/MISC/WHY-CHOOSE-US-1 -->

            <!-- END: CONTENT/MISC/WHY-CHOOSE-US-1 -->
            <!-- BEGIN: CONTENT/TILES/TILE-3 -->
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
                                                            <?php $gbr = array(
                                                                1=>"$q->gambar_produk"); ?>   
                                                            <div class="c-bg-img-center c-overlay-object"  style="height: 230px; "><img height="225" src="{{url('/data_file/'.$gbr[1]) }}">
                                                                
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
            <!-- END: CONTENT/TILES/TILE-3 -->
            <!-- BEGIN: CONTENT/ISOTOPE/GALLERY-1 -->

            <!-- END: CONTENT/ISOTOPE/GALLERY-1 -->
            <!-- BEGIN: CONTENT/TABS/TAB-1 -->

            <!-- END: CONTENT/TABS/TAB-1 -->
            <!-- BEGIN: CONTENT/FEATURES/FEATURES-11 -->

            <!-- END: CONTENT/FEATURES/FEATURES-11 -->
            <!-- BEGIN: CONTENT/FEATURES/FEATURES-9 -->

            <!-- END: CONTENT/FEATURES/FEATURES-9 -->
            <!-- BEGIN: CONTENT/BARS/BAR-5 -->

            <!-- END: CONTENT/BARS/BAR-5 -->
            <!-- BEGIN: CONTENT/MISC/SUBSCRIBE-FORM-1 -->

            <!-- END: CONTENT/MISC/SUBSCRIBE-FORM-1 -->
            <!-- BEGIN: CONTENT/TESTIMONIALS/TESTIMONIALS-6-1 -->
            <div class="c-content-box c-size-md c-bg-grey-1">
                <div class="container">
                    <div class="c-content-blog-post-card-1-slider" data-slider="owl">
                        <div class="c-content-title-1">
                            <h3 class="c-center c-font-uppercase c-font-bold">Customer Reviews</h3>
                            <div class="c-line-center c-theme-bg"></div>
                            <p class="c-center c-font-uppercase1">Lorem ipsum dolor sit amet et consectetuer adipiscing elit</p>
                        </div>
                        <div class="owl-carousel owl-theme c-theme c-owl-nav-center" data-items="3" data-slide-speed="8000" data-rtl="false">
                            <div class="item">
                                <div class="c-content-testimonial-3 c-option-default">
                                    <div class="c-content"> Lorem ipsum dolor sit amet et consectetuer adipiscing elit, sed nonummy nib euismod tincid unt ut ed laoreet dolore sit amet consectetuer adipiscing. </div>
                                    <div class="c-person">
                                        <img src="assets/base/img/content/avatars/team1.jpg" class="img-responsive">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name">Mark Doe</h4>
                                            <p class="c-position c-font-bold c-theme-font">CFO, Walmart</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-testimonial-3 c-option-default">
                                    <div class="c-content"> Lorem ipsum dolor sit amet et consectetuer adipiscing elit, sed nonummy nib euismod tincid unt ut ed laoreet dolore sit amet consectetuer adipiscing. </div>
                                    <div class="c-person">
                                        <img src="assets/base/img/content/avatars/team6.jpg" class="img-responsive">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name">Ashley Benson</h4>
                                            <p class="c-position c-font-bold c-theme-font">CFO, Loop Inc</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-testimonial-3 c-option-default">
                                    <div class="c-content"> Lorem ipsum dolor sit amet et consectetuer adipiscing elit, sed nonummy nib euismod tincid unt ut ed laoreet dolore sit amet consectetuer adipiscing. </div>
                                    <div class="c-person">
                                        <img src="assets/base/img/content/avatars/team4.jpg" class="img-responsive">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name">Nina Kunis</h4>
                                            <p class="c-position c-font-bold c-theme-font">CFO, ERA Tech</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-testimonial-3 c-option-default">
                                    <div class="c-content"> Lorem ipsum dolor sit amet et consectetuer adipiscing elit, sed nonummy nib euismod tincid unt ut ed laoreet dolore sit amet consectetuer adipiscing. </div>
                                    <div class="c-person">
                                        <img src="assets/base/img/content/avatars/team8.jpg" class="img-responsive">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name">Ashley Benson</h4>
                                            <p class="c-position c-font-bold c-theme-font">CFO, Loop Inc</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-testimonial-3 c-option-default">
                                    <div class="c-content"> Lorem ipsum dolor sit amet et consectetuer adipiscing elit, sed nonummy nib euismod tincid unt ut ed laoreet dolore sit amet consectetuer adipiscing. </div>
                                    <div class="c-person">
                                        <img src="assets/base/img/content/avatars/team7.jpg" class="img-responsive">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name">Mark Jeep</h4>
                                            <p class="c-position c-font-bold c-theme-font">CFO, ERA Tech</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/TESTIMONIALS/TESTIMONIALS-6-1 -->
            <!-- BEGIN: CONTENT/MISC/LATEST-ITEMS-1 -->

            <!-- END: CONTENT/MISC/LATEST-ITEMS-1 -->
            <!-- BEGIN: CONTENT/PRODUCTS/PRODUCT-1 -->

            <!-- END: CONTENT/PRODUCTS/PRODUCT-1 -->
            <!-- BEGIN: CONTENT/PRICING/PRICING-1 -->

            <!-- END: CONTENT/PRICING/PRICING-1 -->
            <!-- BEGIN: CONTENT/SLIDERS/CLIENT-LOGOS-2 -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <!-- Begin: Testimonals 1 component -->
                    <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">
                        <!-- Begin: Title 1 component -->
                        <div class="c-content-title-1">
                            <h3 class="c-center c-font-uppercase c-font-bold">Happy Customers</h3>
                            <div class="c-line-center c-theme-bg"></div>
                        </div>
                        <!-- End-->
                        <!-- Begin: Owlcarousel -->
                        <div class="owl-carousel owl-theme c-theme owl-bordered1 c-owl-nav-center" data-items="6" data-desktop-items="4" data-desktop-small-items="3" data-tablet-items="3" data-mobile-small-items="2" data-slide-speed="5000" data-rtl="false">
                            <div class="item">
                                <a href="#">
                                    <img src="assets/base/img/content/client-logos/client1.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/base/img/content/client-logos/client2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/base/img/content/client-logos/client3.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/base/img/content/client-logos/client4.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/base/img/content/client-logos/client5.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/base/img/content/client-logos/client6.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/base/img/content/client-logos/client5.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/base/img/content/client-logos/client6.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/base/img/content/client-logos/client5.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/base/img/content/client-logos/client6.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/base/img/content/client-logos/client5.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/base/img/content/client-logos/client6.jpg" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- End-->
                    </div>
                    <!-- End-->
                </div>
            </div>
            <!-- END: CONTENT/SLIDERS/CLIENT-LOGOS-2 -->
            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->
        <!-- BEGIN: LAYOUT/FOOTERS/FOOTER-6 -->

@stop
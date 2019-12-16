<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-topbar c-layout-header-topbar-collapse">
    <!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
    <!-- BEGIN: HEADER -->
    <header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">
        
        <div class="c-navbar">
            <div class="container">
                <!-- BEGIN: BRAND -->
                <div class="c-navbar-wrapper clearfix">
                        <div class="c-brand c-pull-left">
                            <a href='/' class="c-logo">
                                <img width="200px" height="35px" src="{{asset('data_file/glayout/kodig.png')}}" alt="JANGO" class="c-desktop-logo">
                                <img width="200px" height="35px" src="{{asset('data_file/glayout/kodig.png')}}" alt="JANGO" class="c-desktop-logo-inverse">
                                <img width="200px" height="35px" src="{{asset('data_file/glayout/kodig.png')}}" alt="JANGO" class="c-mobile-logo"> </a>
                            <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                            </button>
                            <button class="c-topbar-toggler" type="button">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <button class="c-search-toggler" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                            <button class="c-cart-toggler" type="button">
                                <i class="icon-handbag"></i>
                                <span class="c-cart-number c-theme-bg">2</span>
                            </button>
                        </div>
                        <!-- END: BRAND -->
                        <!-- BEGIN: QUICK SEARCH -->
                        <form class="c-quick-search" action="#">
                            <input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
                            <span class="c-theme-link">&times;</span>
                        </form>
                        <!-- END: QUICK SEARCH -->
                        <!-- BEGIN: HOR NAV -->
                        <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
                        <!-- BEGIN: MEGA MENU -->
                        <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
                        <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
                            <ul class="nav navbar-nav c-theme-nav">
                                <li class="c-menu-type-classic">
                                    <a href='/' class="c-link dropdown-toggle">Home
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    
                                </li>
                                <li class="c-menu-type-classic">
                                    <a href='/mart' class="c-link dropdown-toggle">Mart
                                        <span class="c-arrow c-toggler"></span>
                                    </a>

                                </li>
                                <li>
                                    <a href='/event' class="c-link dropdown-toggle">Event
                                        <span class="c-arrow c-toggler"></span>
                                    </a>

                                </li>
                                <li>
                                    <a href='/news' class="c-link dropdown-toggle">News
                                        <span class="c-arrow c-toggler"></span>
                                    </a>

                                </li>
                                <li>
                                    <a href='aboutus' class="c-link dropdown-toggle">About us
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
    

                                    <!-- BEGIN: DESKTOP VERSION OF THE TAB MEGA MENU -->
                                    <!-- BEGIN: MOBILE VERSION OF THE TAB MEGA MENU -->
                                    <ul class="dropdown-menu c-menu-type-mega c-visible-mobile">
                                        <li class="dropdown-submenu">
                                            <a href="javascript:;">Jango Components
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                       
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="javascript:;">Base Components
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                
                                        </li>
                                    </ul>
                                    <!-- END: MOBILE VERSION OF THE TAB MEGA MENU -->
                                </li>
                                <li class="c-search-toggler-wrapper">
                                    <a href="#" class="c-btn-icon c-search-toggler">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                                <li class="c-cart-toggler-wrapper">
                                    <a href="#" class="c-btn-icon c-cart-toggler">
                                        <i class="icon-handbag c-cart-icon"></i>
                                    <span class="c-cart-number c-theme-bg">0 @if(session('cart')!==null)
                                        {{ count((array)session('cart')) }}
                                        @endif</span>
                                    </a>
                                </li>
                              
                                @if(Auth::check())
                                <li>
                                    <a href="/dashboard" class=" c-link dropdown-toggle">My account
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold">
                                    <i class="icon-user "></i> Sign Out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                </li>
                                @else
                                <li>
                                    <a href="javascript:;" data-toggle="modal" data-target="#login-form" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold">
                                        <i class="icon-user"></i> Sign In</a>
                                </li>
                                @endif
                            </ul>
                        </nav>
                        <!-- END: MEGA MENU -->
                        <!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                        <!-- END: HOR NAV -->
                    </div>
                                        <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
                <!-- BEGIN: CART MENU -->
@include('frontend.layouts._mart')
                <!-- END: CART MENU -->
                <!-- END: LAYOUT/HEADERS/QUICK-CART -->
            </div>
        </div>
    </header>
    <!-- END: HEADER -->
    <!-- END: LAYOUT/HEADERS/HEADER-1 -->
    <!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
@include('frontend.akun.lupa')
    <!-- END: CONTENT/USER/FORGET-PASSWORD-FORM -->
    <!-- BEGIN: CONTENT/USER/SIGNUP-FORM -->
@include('frontend.akun.daftar')
    <!-- END: CONTENT/USER/SIGNUP-FORM -->
    <!-- BEGIN: CONTENT/USER/LOGIN-FORM -->
@include('frontend.akun.masuk')
</div>
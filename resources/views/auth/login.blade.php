@extends('frontend.layouts.master')

@section('content')
        <div class="c-layout-page">
            <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
            <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
                <div class="container">
                    
                    <div class="c-page-title c-pull-left">
                        <h3 class="c-font-uppercase c-font-sbold">Customer Login/Register</h3>
                        <h4 class="">Page Sub Title Goes Here</h4>
                    </div>
                    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                        <li>
                            <a href="shop-customer-account.html">Customer Login/Register</a>
                        </li>
                        <li>/</li>
                        <li class="c-state_active">Jango Components</li>
                    </ul>
                </div>
            </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
            <!-- BEGIN: PAGE CONTENT -->
            <!-- BEGIN: CONTENT/SHOPS/SHOP-LOGIN-REGISTER-1 -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                        @if(Session::has('message'))
                            <div class="alert alert-success text-center" role="alert">
                                {{Session::get('message')}}
                            </div>
                        @endif
                    <div class="c-shop-login-register-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-default c-panel">
                                    <div class="panel-body c-panel-body">
                                        <form class="c-form-login" action="/ber_log" method="POST">
                                            {{csrf_field()}}
                                            <div class="form-group has-feedback">
                                                <input name="email" type="text" class="form-control c-square c-theme input-lg" placeholder="Username">
                                                <span class="glyphicon glyphicon-user form-control-feedback c-font-grey"></span>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <input name="password" type="password" class="form-control c-square c-theme input-lg" placeholder="Password">
                                                <span class="glyphicon glyphicon-lock form-control-feedback c-font-grey"></span>
                                            </div>
                                            <div class="row c-margin-t-40">
                                                <div class="col-xs-8">
                                                    <div class="c-checkbox">
                                                        <input type="checkbox" id="checkbox1-77" class="c-check">
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-xs-4">
                                                    <button type="submit" class="pull-right btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Login</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-default c-panel">
                                    <div class="panel-body c-panel-body">
                                        <div class="c-content-title-1">
                                            <h3 class="c-left">
                                                <i class="icon-user"></i> Don't have an account yet?</h3>
                                            <div class="c-line-left c-theme-bg"></div>
                                            <p>Join us and enjoy shopping online today.</p>
                                        </div>
                                        <div class="c-margin-fix">
                                            <div class="c-checkbox c-toggle-hide" data-object-selector="c-form-register" data-animation-speed="600">
                                                <input type="checkbox" id="checkbox6-444" class="c-check">
                                                <label for="checkbox6-444">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Register Now! </label>
                                            </div>
                                        </div>
                                        <form class="c-form-register c-margin-t-20" action="/ber_reg" method="post">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <div class="form-group">
                                                <div class="row">
                                                    
                                            </div>
                                            <div class="form-group">
                                                    <label class="control-label">Name</label>
                                                    <input name="name" type="text" class="form-control c-square c-theme" placeholder="Masukkan Name"> 
                                                </div>
                              
                                            <div class="row">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input name="email" type="email" class="form-control c-square c-theme" placeholder="Email"> 
                                            </div>
                                                
                                            <div class="form-group">
                                                <label class="control-label">Password</label>
                                                <input class="form-control c-square c-theme" type="password" placeholder="Password" name="password" value="{{old('password')}}"/>
                                                <span class="text-danger">{{$errors->first('password')}}</span></div>
                                            <div class="form-group">
                                                <label class="control-label">Confirm Password</label>
                                                <input class="form-control c-square c-theme" type="password" placeholder="Confirm Password" name="password_confirmation" value="{{old('password_confirmation')}}"/>
                                                <span class="text-danger">{{$errors->first('password_confirmation')}}</span></div>
                        

                                            <div class="form-group c-margin-t-40">
                                                <button type="submit" class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="list-unstyled c-bs-grid-small-space">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 c-margin-t-10">
                                            <a class="btn btn-block btn-social c-btn-square c-btn-uppercase btn-md btn-twitter">
                                                <i class="fa fa-twitter"></i> Sign in with Twitter </a>
                                        </div>
                                        <div class="col-md-4 col-sm-4 c-margin-t-10">
                                            <a class="btn btn-block btn-social c-btn-square c-btn-uppercase btn-md btn-facebook">
                                                <i class="fa fa-facebook"></i> Sign in with Facebook </a>
                                        </div>
                                        <div class="col-md-4 col-sm-4 c-margin-t-10">
                                            <a class="btn btn-block btn-social c-btn-square c-btn-uppercase btn-md btn-google">
                                                <i class="fa fa-google-plus"></i> Sign in with Google </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/SHOPS/SHOP-LOGIN-REGISTER-1 -->
            <!-- END: PAGE CONTENT -->
        </div>

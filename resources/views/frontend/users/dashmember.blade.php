@extends('frontend.layouts.master')
@section('content')

<div class="modal fade c-content-login-form" id="update-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content c-square">
        <div class="modal-header c-no-border">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('ber_update')}}" method="POST" >
        @csrf
            <div class="modal-body">
            <h3 class="c-font-24 c-font-sbold">Hi ! Member</h3>
            <p>Nice to meet you !</p>
            @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
             @endif
        
                
                <div class="form-group">
                    <label >Email</label>
                    <input name="email"  class="form-control input-lg c-square" id="login-email" placeholder="Email" value="{{ Auth::user()->email }}"> </div>
                    
            
                <div class="form-group">
                    <label >Name</label>
                    <input name="name" type="text"  class="form-control input-lg c-square"  placeholder="Full Name" value="{{ Auth::user()->name }}"> </div>
                
                    
                <div class="form-group">
                        <label >Number Phone</label>
                    <input name="no_telp" type="tel"  class="form-control input-lg c-square" id="login-email" placeholder="Phone Number" value="{{ Auth::user()->no_telp }}"> </div>
                <div class="form-group">
                        <label >Born</label>
                    <input name="TTL" type="date" class="form-control input-lg c-square" id="login-email" placeholder="Born" value="{{ Auth::user()->TTL }}"> </div>
                <div class="form-group">
                        <label >Address</label>
                    <input name="alamat" type="text"  class="form-control input-lg c-square" id="login-email" placeholder="Address" value="{{ Auth::user()->alamat }}"> </div>
                <div class="form-group">
                    <button type="button" class="btn btn-success c-btn-uppercase c-btn-bold">Upload Foto</button></div>              
               

            
        </div>
        <div class="modal-footer c-no-border">
            <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Save</button>
                    
                    
        </div>
    </form>
      </div>
    </div>
</div>
<div class="modal fade c-content-login-form" id="passup-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content c-square">
        <div class="modal-header c-no-border">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                @if(Session::has('message'))
                <div class="alert alert-success text-center" role="alert">
                    {{Session::get('message')}}
                </div>
                 @endif
        <form action="{{route('pass_update')}}" method="post" >
            @csrf
            <h3 class="c-font-24 c-font-sbold">Hi ! Member</h3>
            <p>Change Password !</p>
            
            
                
                
            
                <div class="form-group">
                    
                    <input name="oldpassword" type="password"  class="form-control input-lg c-square"  placeholder="Enter old password" value=""> </div>
                  
                <div class="form-group">
                    <input name="password" type="password"  class="form-control input-lg c-square" id="login-email" placeholder="Enter new password" > </div>
                <div class="form-group">
                    <input name="password_confirmation" type="password" class="form-control input-lg c-square" id="login-email" placeholder="Enter confrim password" value=""> </div>
                

            
        </div>
        <div class="modal-footer c-no-border">
            <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Save</button>
                    
                    
        </div>
    </form>
      </div>
    </div>
</div>


<div class="c-layout-page">
    <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
    <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
        <div class="container">
            <div class="c-page-title c-pull-left">
                <h3 class="c-font-uppercase c-font-sbold">Member Dashboard</h3>
                <h4 class="">Check your detail profil </h4>
            </div>
            <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                <li>
                    <a href="/dashboard">Customer Dashboard</a>
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
                        <li class="c-active">
                            <a href="/dashboard">My Dashbord</a>
                        </li>
                        
                        

                        <li class="">
                        <a href="{{'myorder'}}">My Order </a>
                        </li>
                       
                       
                    </ul>
                </li>
            </ul>
            <!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
        </div>
        
<div class="c-layout-sidebar-content row">
        <!-- BEGIN: PAGE CONTENT -->
        <!-- BEGIN: CONTENT/SHOPS/SHOP-CUSTOMER-DASHBOARD-1 -->
        
        <div class="c-content-title-1 ">
            
            <h3 class="c-font-uppercase c-font-bold">My Dashboard</h3>
            <div class="c-line-left"></div>
            <p class="row"> Hello ! 
                    <a  class="c-theme-link">{{ Auth::user()->name }}</a> 
                    <br />
                    Change your password <a data-toggle="modal" data-target="#passup-modal"  class="c-thame-link">Click here</a>
                    <br /> </p> 
            <div class="col-md-6 col-sm-6">
                    <div class="c-content-feature-2 c-option-2 c-theme-bg-parent-hover">
                        <div class="c-icon-wrapper c-theme-bg-on-parent-hover">
                            <div class="c-content-line-icon c-theme c-icon-screen-chart"></div>
                        </div>
                        <h3 class="c-font-uppercase c-title">My point</h3>
                        <p>{{ Auth::user()->poin_member }}0 XP</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                        <div class="c-content-feature-2 c-option-2 c-theme-bg-parent-hover">
                            <div class="c-icon-wrapper c-theme-bg-on-parent-hover">
                                <div class="c-content-line-icon c-theme c-icon-support"></div>
                            </div>
                            <h3 class="c-font-uppercase c-title">My Badge</h3>
                            <p>Member {{ Auth::user()->level_member }}</p>
                        </div>
                    </div>
            
            
            
        </div>
        <div class="c-content-title-1 ">
                
       
        
        <div class="row">
                
            <div class="col-md-6 col-sm-6 col-xs-12 c-margin-b-20">
                <h3 class="c-font-uppercase c-font-bold">My Info</h3>
                <ul class="list-unstyled">
                    <li> Name :
                            <a  class="c-theme-link">{{ Auth::user()->name }}</a> 
                            <br />  </li>
                    <li> Phone :
                            <a  class="c-theme-link">{{ Auth::user()->no_telp }}</a> 
                            <br /> </li>
                    <li> Email :
                            <a  class="c-theme-link">{{ Auth::user()->email }}</a> 
                            <br /> </li>
                    <li> Address :
                            <a  class="c-theme-link">{{ Auth::user()->alamat }}</a> 
                            <br /> </li>
                    <div class="form-group c-margin-t-40">
                        <a href="javascript:;" data-toggle="modal" data-target="#update-modal" class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">
                             Update Data</a>
                       
                    </div>

                </ul>
                
            </div>
            
            
            
        </div>

        <!-- END: CONTENT/SHOPS/SHOP-CUSTOMER-DASHBOARD-1 -->
        <!-- END: PAGE CONTENT -->
    </div>
        
    </div>
    
</div>


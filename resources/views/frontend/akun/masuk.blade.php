<div class="modal fade c-content-login-form" id="login-form" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content c-square">
                <div class="modal-header c-no-border">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 class="c-font-24 c-font-sbold">Good Afternoon!</h3>
                    <p>Let's make today a great day!</p>
                    @if(Session::has('message'))
                    <div class="alert alert-success text-center" role="alert">
                        {{Session::get('message')}}
                    </div>
                     @endif
                    <form action="/ber_log" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="login-email" class="hide">Email</label>
                            <input name="email"  class="form-control input-lg c-square" id="login-email" placeholder="Email"> </div>
                            
                        <div class="form-group">
                            <label for="login-password" class="hide">Password</label>
                            <input name="password" type="password" class="form-control input-lg c-square" id="login-password" placeholder="Password"> </div>
                           
                        <div class="form-group">
                            <div class="c-checkbox">
                                <input type="checkbox" id="login-rememberme" class="c-check">
                                <label for="login-rememberme" class="c-font-thin c-font-17">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Remember Me </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Login</button>
                            
                            <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form" data-dismiss="modal" class="c-btn-forgot">Forgot Your Password ?</a>
                        </div>
                        <div class="clearfix">
                            <div class="c-content-divider c-divider-sm c-icon-bg c-bg-grey c-margin-b-20">
                                <span>or signup with</span>
                            </div>
                            <ul class="c-content-list-adjusted">
                                
                                <li>
                                    <a href="{{ url('auth/google') }}" class="btn btn-block c-btn-square btn-social btn-google">
                                        <i class="fa fa-google" ></i> Google </a>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="modal-footer c-no-border">
                    <span class="c-text-account">Don't Have An Account Yet ?</span>
                    <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
                </div>
            </div>
    </div>
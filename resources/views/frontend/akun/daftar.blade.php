<div class="modal fade c-content-login-form" id="signup-form" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content c-square">
                <div class="modal-header c-no-border">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 class="c-font-24 c-font-sbold">Create An Account</h3>
                    <p>Please fill in below form to create an account with us</p>
                    <form action="/ber_reg" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        
                        <div class="form-group">
                            <label for="signup-email" class="hide">Name</label>
                            <input name="name" type="text" class="form-control input-lg c-square" placeholder="Name"> </div>
                        
                        <div class="form-group">
                            <label for="signup-username" class="hide">Email</label>
                            <input name="email" type="email" class="form-control input-lg c-square"  placeholder="Email"> </div>
                        
                        <div class="form-group">
                            <input class="form-control input-lg c-square" type="password" placeholder="Password" name="password" value="{{old('password')}}"/>
                            <span class="text-danger">{{$errors->first('password')}}</span></div>
                        <div class="form-group">
                            <input class="form-control input-lg c-square" type="password" placeholder="Confirm Password" name="password_confirmation" value="{{old('password_confirmation')}}"/>
                            <span class="text-danger">{{$errors->first('password_confirmation')}}</span></div>
    
                        <div class="form-group">
                            <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Signup</button>
                            <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
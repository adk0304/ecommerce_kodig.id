<div class="modal fade c-content-login-form" id="update-data" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-font-sbold">Hi ! Member</h3>
                <p>Nice to meet you !</p>
                @if(Session::has('message'))
                <div class="alert alert-success text-center" role="alert">
                    {{Session::get('message')}}
                </div>
                 @endif
                <form action="#" >
                    
                    <div class="form-group">
                        <label for="login-email" class="hide">Email</label>
                        <input name="email"  class="form-control input-lg c-square" id="login-email" placeholder="Email" value="{{ Auth::user()->email }}"> </div>
                        
                
                    <div class="form-group">
                        
                        <input name="name" type="text"  class="form-control input-lg c-square"  placeholder="Full Name" value=""> </div>
                      
                    <div class="form-group">
                        <input name="no_telp" type="tel"  class="form-control input-lg c-square" id="login-email" placeholder="Phone Number" > </div>
                    <div class="form-group">
                        <input name="TTL" type="date" class="form-control input-lg c-square" id="login-email" placeholder="Born" value="TTL"> </div>
                    <div class="form-group">
                        <input name="alamat" type="text"  class="form-control input-lg c-square" id="login-email" placeholder="Address" value=""> </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-success c-btn-uppercase c-btn-bold">Upload Foto</button></div>              
                   

                </form>
            </div>
            <div class="modal-footer c-no-border">
                <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Save</button>
                        
                        
            </div>
        </div>
</div>
<?php

namespace App\Http\Controllers;

use App\User;
use App\Transaksi;
use App\Dtransaksi;
use App\Produk;
use App\Produkatt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Socialite;




class MemberController extends Controller
{
    public function index(Request $request){
        if($request->user()->admin=='1'){
            return redirect()->route('home');
        }
        return view('frontend.users.dashmember');
    }
    protected $redirectTo = 'dashboard';
    
    
    public function register(Request $request){
        $this->validate($request,[
            'name'=>'required|string|max:255',
            'email'=>'required|string|email|unique:users,email',
            'password'=>'required|min:6|confirmed',
        ]);
        $input_data=$request->all();
        $input_data['password']=Hash::make($input_data['password']);
        User::create($input_data);
        return back()->with('message','Registered already!');

    }
   

    public function logout(){
        Auth::logout();
        Session::forget('frontSession');
        return redirect('/');
    }

    public function pass_update(Request $request){
        $oldPassword=User::where('id', $request->user()->id)->first();
        $input_data=$request->all();
        if(Hash::check($input_data['oldpassword'],$oldPassword->password)){
            $this->validate($request,[
               'password'=>'required|min:6|max:12|confirmed'
            ]);
            $new_pass=Hash::make($input_data['password']);
            User::where('id', $request->user()->id)->update(['password'=>$new_pass]);
            return back()->with('message','Update Password Already!');
        }else{
            return back()->with('oldpassword','Old Password is Inconrrect!');
        }
    }

    public function login(Request $request){
        $input_data=$request->all();
        if(Auth::attempt(['email'=>$input_data['email'],'password'=>$input_data['password']])){
            Session::put('frontSession',$input_data['email']);
            return redirect('/dashboard');
        }else{
            return back()->with('message','Account is not Valid!');
        }
    }

    public function ber_update(Request $request){
        User::find($request->user()->id)->update([
            'name'=>$request['name'], 
            'email'=>$request['email'], 
        //    'password' => Hash::make($request->newPassword),
            'no_telp'=>$request['no_telp'], 
            'TTL'=>$request['TTL'], 
            'alamat'=>$request['alamat'], 
           
        ]);
        return back();

    }
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->stateless()->user();
        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);

        return redirect($this->redirectTo);
    }

    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        if($authUser){
            return $authUser;
        }
        return User::create([
            'name'      => $user->name,
            'email'     => $user->email,
            'provider'  => strtoupper($provider),
            'provider_id'   => $user->id
        ]);
    }

    public function myorder(Request $request)
    {
        // DB::table('users')->chunk(100, function ($users) {
        //     foreach ($users as $user) {
        //         //
        //     }
        // });
        // $orders = DB::table('Transaksi')
        //         ->orderBy('user_id')
        //         ->get();
        //$useid=User::where('id', $request->user()->id)->first();
        $ord = DB::table('Transaksi')
                    ->where('user_id', $request->user()->id)
                    ->orderByRaw('id DESC')
                    ->get();
        //dd($ord);
        return view('frontend.users.myorder', compact('ord'));
    }

    public function upload()
    {

    }

    public function proses_upload(Request $request)
    {
        // dd($request);
        $this->validate($request, [
			'bukti_tf' => 'required|file|image|mimes:jpeg,png,jpg|max:5048' 
        ]);
        
        $file = $request->file('bukti_tf');
        
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        Transaksi::find($request->id)->update([
            'bukti_tf' => $nama_file,
        ]);
        
        return redirect()->back();
    }
    
   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function index(){
        return response()->json('admin');
    }

    public function logout(){

        Auth::logout();
        $request->session('frontSession');
        return redirect('/admin');
    }
    
}

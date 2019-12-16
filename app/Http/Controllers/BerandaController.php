<?php

namespace App\Http\Controllers;
use App\ProdukAtt;
use App\Produk;
use App\Galery;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function home(){
        $produkatt = ProdukAtt::all();
        $produkas =  Produk::all();
        
        return view('frontend.home', compact('produkatt'), compact('produkas'));
    }
}

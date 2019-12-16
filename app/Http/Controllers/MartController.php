<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Produk;
use App\ProdukAtt;
use App\Galery;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
class MartController extends Controller
{
    public function index(){
        $produkatt = ProdukAtt::all();
        $produkas =  Produk::all();
        
        return view('frontend.layouts.mart', compact('produkatt'), compact('produkas'));
    }

    public function viewC(){
        $produkatt = ProdukAtt::all();
        $produkas =  Produk::all();
        return view('frontend.layouts.martCart', compact('produkatt'));
    }

    public function addCart(Request $request, $id){
        $produkatt = ProdukAtt::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($produkatt, $produkatt->id);

        $request->session()->put('cart', $cart);

        return back();
    }
                     
    public function detail($id){
        //dd($id);
        $data = ProdukAtt::find($id);
        $data2[0] = $data->galery->gambar_produk;
        //$query = DB::table('Galery')->select('gambar_produk');
        //$data2[0] = $data->galery;
        dd($data2);
        $produkatt = ProdukAtt::all();
        return view('frontend.layouts.martDetail', compact('data2'), compact('produkatt'));
    }



    


 
    
}

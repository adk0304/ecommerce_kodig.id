<?php

namespace App\Http\Controllers;

use App\ProdukAtt;
use App\Produk;
use App\Galery;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        return view('cart');
    }
    
    public function addToCart($id)
    {
        $product = ProdukAtt::find($id);
       // $galery = $product->Galery;
       // $baru = Galery::where('gambar_produk', $galery);
        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                    $id => [
                        "idne" => $product->Produk['id'],
                        "name" => $product->Produk['nama_produk'],
                        "quantity" => 1,
                        "price" => $product->harga_produk,
                     //   "photo" => $product->Galery,
                    ]
            ];
           // dd($cart);
            
            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "idne" => $product->Produk['id'],
            "name" => $product->Produk['nama_produk'],
            "quantity" => 1,
            "price" => $product->harga_produk,
           // "photo" =>  $product->galery->gambar_produk,
       ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        
        }
    }
}

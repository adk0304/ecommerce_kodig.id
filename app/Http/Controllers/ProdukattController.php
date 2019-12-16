<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produkatt;
use App\Produk;
class ProdukattController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produkatt = produkatt::all();
    	return view('admin/produkatt/produkatt', ['produkatt' => $produkatt]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function modal_tambah()
    {
        //

        $data_produk = Produk::All();
        return view('admin.produkatt.modal_tambah_produkatt',compact('data_produk'));
    }

    public function modal_edit($id)
    {
        $data_produkatt = produkatt::find($id);
        $data_produk = Produk::All();
        return view('admin.produkatt.modal_edit_produkatt',compact('data_produkatt','data_produk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produkatt = new Produkatt();
        $produkatt->SKU = $request->get('SKU');
        $produkatt->warna_produk = $request->get('warna_produk');
        $produkatt->jumlah_produk = $request->get('jumlah_produk');
        $produkatt->stock_produk = $request->get('stock_produk');
        $produkatt->size_produk = $request->get('size_produk');
        $produkatt->harga_produk = $request->get('harga_produk');
        $produkatt->produk_id = $request->get('produk_id');
        $produkatt->save();
        session()->put('status', 'Data berhasil Ditambahkan!');
        return redirect('/produkatt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'SKU' => 'required',
            'warna_produk' => 'required',
            'jumlah_produk' => 'required',
            'stock_produk' => 'required',
            'size_produk' => 'required',
            'harga_produk' => 'required',
            'produk_id' => 'required'
            ]);
            $produkatt = produkatt::find($id);
            $produkatt->SKU = $request->SKU;
            $produkatt->warna_produk = $request->warna_produk;
            $produkatt->jumlah_produk = $request->jumlah_produk;
            $produkatt->stock_produk = $request->stock_produk;
            $produkatt->size_produk = $request->size_produk;
            $produkatt->harga_produk = $request->harga_produk;
            $produkatt->produk_id = $request->produk_id;
            $produkatt->save();
            return redirect('/produkatt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $produkatt = Produkatt::find($id);
        $produkatt->delete();
        return redirect('/produkatt');
    }
}

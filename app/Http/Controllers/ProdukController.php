<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data produk
    	$produk = Produk::all();
    	// mengirim data produk ke view produk
    	return view('admin/produk/produk', ['produk' => $produk]);
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
        return view('admin.produk.modal_tambah_produk');
    }
    public function modal_tambahSKU()
    {
        //
        return view('admin.produk.modal_tambah_SKU');
    }
    public function modal_edit($id)
    {
        $data_produk = produk::find($id);
        return view('admin.produk.modal_edit_produk',compact('data_produk'));
    }
    public function modal_SKU($id)
    {
        $data_produk = produk::find($id);
        return view('admin.produk.modal_SKU',compact('data_produk'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
    		'nama_produk' => 'required',
    		'jenis_produk' => 'required'
    	]);
        Produk::create([
    		'nama_produk' => $request->nama_produk,
    		'jenis_produk' => $request->jenis_produk
    	]);
    	return redirect('/produk');
    }
    /* public function storeSKU(Request $request)
    {
        //dd($request);
        //
        $this->validate($request,[
    		'SKU' => 'required',
            'warna_produk' => 'required',
            'stock_produk' => 'required',
            'size_produk' => 'required',
            'harga_produk' => 'required',
            'gambar_produk' => 'required'
    	]);
        Produk::create([
            'SKU' => $request->nama_produk,
    		'warna_produk' => $request->warna_produk,
    		'stock_produk' => $request->stock_produk,
    		'size_produk' => $request->size_produk,
            'harga_produk' => $request->harga_produk,
            'gambar_produk' => $request->gambar_produk

    	]);
    	return redirect('/produk');
    } */

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
        //Belum Fix
        $produk = Produk::find($id);
        return view('edit', ['produk' => $produk]);
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
        $this->validate($request,[
            'nama_produk' => 'required',
            'jenis_produk' => 'required'
            ]);
            $produk = produk::find($id);
            $produk->nama_produk = $request->nama_produk;
            $produk->jenis_produk = $request->jenis_produk;
            $produk->save();
            return redirect('/produk');
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
        $produk = produk::find($id);
        $produk->delete();
        return redirect('/produk');
    }


    public function test()
    {
        $produk = Produk::all();
       return view('admin/produk/produktest',['produk' => $produk]);
    }

}

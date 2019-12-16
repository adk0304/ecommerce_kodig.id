<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dtransaksi;
use App\Transaksi;
use App\Produk;

class DtransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dtransaksi = dtransaksi::all();
    	// mengirim data ppromo ke view promo
    	return view('admin/dtransaksi/dtransaksi', ['dtransaksi' => $dtransaksi]);

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
        $data_transaksi = Transaksi::All();
        return view('admin.dtransaksi.modal_tambah_dtransaksi',compact('data_produk','data_transaksi'));
    }

    public function modal_edit($id)
    {
        $data_dtransaksi = dtransaksi::find($id);
        return view('admin.dtransaksi.modal_edit_dtransaksi',compact('data_dtransaksi'));
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
        $dtransaksi = new Dtransaksi(); 
        $dtransaksi->satuan_barang = $request->get('satuan_barang');
        $dtransaksi->sub_harga = $request->get('sub_harga'); 
        $dtransaksi->poin_transaksi = $request->get('poin_transaksi');
        $dtransaksi->produk_id = $request->get('produk_id');
        $dtransaksi->transaksi_id = $request->get('transaksi_id');
        $dtransaksi->save();
        session()->put('status', 'Data berhasil Ditambahkan!');
    	return redirect('/dtransaksi');
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
            'satuan_barang' => 'required',
            'sub_harga' => 'required',  
            'poin_transaksi' => 'required', 
            'produk_id' => 'required',
            'transaksi_id' => 'required'
                ]);
                $dtransaksi = dtransaksi::find($id); 
                $dtransaksi->satuan_barang = $request->satuan_barang;
                $dtransaksi->sub_harga = $request->sub_harga;  
                $dtransaksi->poin_transaksi = $request->poin_transaksi; 
                $dtransaksi->produk_id = $request->produk_id;
                $dtransaksi->transaksi_id = $request->transaksi_id;
                $dtransaksi->save();
                return redirect('/dtransaksi');
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

        $dtransaksi = Dtransaksi::find($id);
        $dtransaksi->delete();
        return redirect('/dtransaksi');
    }
}

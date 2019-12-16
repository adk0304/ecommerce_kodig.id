<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Dtransaksi;
use App\Produk;
use App\Produkatt;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $transaksi = transaksi::all();
    	return view('admin/transaksi/transaksi', ['transaksi' => $transaksi]);
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
        return view('admin.transaksi.modal_tambah_transaksi');
    }

    public function modal_edit($id)
    {
        $data_transaksi = transaksi::find($id);

        return view('admin.transaksi.modal_edit_transaksi',compact('data_transaksi'));
    }

    public function modal_edit2($id)
    {
        $data_transaksi = transaksi::find($id);

        return view('admin.transaksi.modal_edit_transaksi2',compact('data_transaksi'));
    }

    public function modal_detail($id)
    {
        $data_transaksi = transaksi::find($id);

        return view('admin.transaksi.modal_edit_detail',compact('data_transaksi'));
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
        $transaksi = new Transaksi();
        $transaksi->nomor_transaksi = $request->get('nomor_transaksi');
        $transaksi->tgl_transaksi = $request->get('tgl_transaksi');
        $transaksi->total_harga = $request->get('total_harga');
        $transaksi->alamat_kirim = $request->get('alamat_kirim');
        $transaksi->invoice = $request->get('invoice');
        $transaksi->status = $request->get('status');
        $transaksi->keterangan = $request->get('keterangan');
        $transaksi->tgl_verif = $request->get('tgl_verif');
        $transaksi->bukti_tf = $request->get('bukti_tf');
        $transaksi->user_id = $request->get('user_id');
        $transaksi->save();
        session()->put('status', 'Data berhasil Ditambahkan!');
    	return redirect('/transaksi');
        // dd($promo);
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
            'status' => 'required',
            'keterangan' => 'required',
            'tgl_verif' => 'required'
                ]);

                $transaksi = transaksi::find($id);
                $transaksi->status = $request->status;
                $transaksi->keterangan = $request->keterangan;
                $transaksi->tgl_verif = $request->tgl_verif;
                $transaksi->save();
                
                return redirect('/transaksi');
    }

    public function update2(Request $request, $id)
    {
        // 
        $this->validate($request,[
            'nomor_transaksi' => 'required',  
            'alamat_kirim' => 'required',  
            'total_harga' => 'required',
            'satuan_barang' => 'required',

                ]); 
                $transaksi = transaksi::find($id);
                $transaksi->nomor_transaksi = $request->nomor_transaksi; 
                $transaksi->alamat_kirim = $request->alamat_kirim; 
                $transaksi->total_harga = $request->total_harga;
                $data_transaksi->satuan_barang=$request->satuan_barang; 
                $transaksi->save();
                
                return redirect('/transaksi');
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
        $transaksi = Transaksi::find($id);
        $transaksi->delete();
        return redirect('/transaksi');
    }
}

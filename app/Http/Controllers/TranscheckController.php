<?php

namespace App\Http\Controllers;
use Validator;
use App\Transaksi;
use App\Dtransaksi;
use App\Produk;
use App\Produkatt;
use Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class TranscheckController extends Controller
{
    public function tcheck(){
        $produkTransaksi = Transaksi::all();
        $detailTransaksi = Dtransaksi::all();
        return view('frontend.layouts.checkout', ['produkTransaksi' => $produkTransaksi], ['detailTransaksi' => $detailTransaksi]);
    }
    public function tambah_transaksi(Request $request)
    {
        //  dd($request);
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
        
        if($transaksi->save()){

            $id = $transaksi->id;
            
            // foreach ($request->Dtransaksi as $key => $v)
            for($x = 0; $x < count($request->get('produk_id')); $x++){


                $data = new Dtransaksi;
                $data->transaksi_id = $id;
                $data->produk_id = $request->get('produk_id')[$x];
                $data->satuan_barang = $request->get('satuan_barang')[$x];
                $data->sub_harga = $request->get('sub_harga')[$x];
                // $data = arrey('transaksi_id'=>$id,
                //               'produk_id'=>$v,
                //               'satuan_barang'=>$request->qty [$key],
                //               'sub_harga'=>$request->price [$key]);
                // Dtransaksi::insert($data);
                $data->save();
            }

        }
        return redirect()->route('checkinvoice');
       // return back();

        

        
        // $dtransaksi = new Dtransaksi();
        // $dtransaksi->satuan_barang = $request->get('satuan_barang');
        // $dtransaksi->sub_harga = $request->get('sub_harga');
        // $dtransaksi->poin_transaksi = $request->get('poin_transaksi');
        // $dtransaksi->produk_id = $request->get('produk_id');
        // $dtransaksi->transaksi_id = $request->get('transaksi_id');
        // $dtransaksi->save();
      
        
        
        
        // $produk = new Produk();
        // $produk->nama_produk = $request->get('nama_produk');
        // $produk->jenis_produk = $request->get('jenis_produk');
        // $produk->save();
    //     $dtransaksi = new Dtransaksi();
    //     $dtransaksi->satuan_barang = $request->get('satuan_barang');
    //     $dtransaksi->sub_harga = $request->get('sub_harga');
    //     $dtransaksi->poin_transaksi = $request->get('poin_transaksi');
    //     $dtransaksi->produk_id = $request->get('produk_id');
    //     $dtransaksi->transaksi_id = $request->get('transaksi_id');
    //     $dtransaksi->save();
    //     $baru = new Dtransaksi();
    //     $baru = $request->get('transaksi_id');
        
    //    return redirect()->route('checkinvoice');

    }

    public function cetak_invoice(){
        // $data = Transaksi::find($id); 
        $data = DB::table('transaksi')
            ->orderByRaw('id DESC')
            ->limit(1)
            ->get();
            // dd($data);
        // $user = DB::table('Transaksi')->where('id', $id)->first();  
        return view('frontend.layouts.checkS', compact('data'));
    }

    // public function cetak_invoice(){
    //     return view('frontend.layouts.checkS');
    // }
}

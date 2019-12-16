<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promo;
use App\Produkatt;
class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        // mengambil data promo
    	$promo = promo::all();
    	// mengirim data ppromo ke view promo
    	return view('admin/promo/promo', ['promo' => $promo]);
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

        $data_produkatt = Produkatt::All();
        return view('admin.promo.modal_tambah_promo',compact('data_produkatt'));
    }

    public function modal_edit($id)
    {
        $data_promo = promo::find($id);
    $data_produkatt= produkatt::all();
        return view('admin.promo.modal_edit_promo',compact('data_promo','data_produkatt'));
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
        $promo = new Promo();
        $promo->nama_promo = $request->get('nama_promo');
        $promo->jenis_promo = $request->get('jenis_promo');
        $promo->nominal_promo = $request->get('nominal_promo');
        $promo->expired_date = $request->get('expired_date');
        $promo->produkatt_id = $request->get('produkatt_id');
        $promo->save();
        session()->put('status', 'Data berhasil Ditambahkan!');
    	return redirect('/promo');
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
        'nama_promo' => 'required',
        'jenis_promo' => 'required',
        'nominal_promo' => 'required',
        'expired_date' => 'required',
        'produkatt_id' => 'required'
            ]);
            $promo = promo::find($id);
            $promo->nama_promo = $request->nama_promo;
            $promo->jenis_promo = $request->jenis_promo;
            $promo->nominal_promo = $request->nominal_promo;
            $promo->expired_date = $request->expired_date;
            $promo->produkatt_id = $request->produkatt_id;
            $promo->save();
            return redirect('/promo');
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
        $promo = Promo::find($id);
        $promo->delete();
        return redirect('/promo');
        /* return redirect()->back(); */
    }
}

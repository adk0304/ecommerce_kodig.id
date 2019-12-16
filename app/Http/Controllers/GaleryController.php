<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galery;
use App\Produkatt;
use Illuminate\Support\Facades\Validator;
class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         // mengambil data galery
    	$galery = galery::all();
    	// mengirim data produk ke view produk
    	return view('admin/galery/galery', ['galery' => $galery]);

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
        return view('admin.galery.modal_tambah_galery',compact('data_produkatt'));
    }

    public function modal_edit($id)
    {
        $data_galery = galery::find($id);

        return view('admin.galery.modal_edit_galery',compact('data_galery'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
		$this->validate($request, [
            'gambar_produk' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'produkatt_id'=>'required'
        ]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('gambar_produk');
		$nama_file = time()."_".$file->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
		Galery::create([
            'gambar_produk' => $nama_file,
            'produkatt_id' => $request->produkatt_id
        ]);

		return redirect()->back();

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
        $galery = Galery::find($id);
        $galery->delete();
        return redirect('/galery');
    }
}

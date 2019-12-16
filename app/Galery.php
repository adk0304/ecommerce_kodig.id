<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    //
    //
    protected $table = "galery";
    protected $primaryKey = "id";
    protected $fillable = ['gambar_produk','produkatt_id'];

    public function produkatt(){
    	return $this->belongsTo('App\Produkatt','produkatt_id');}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produkatt extends Model
{
    protected $table = "produkatt";
    protected $primaryKey = "id";
    protected $fillable = ['SKU','warna_produk','jumlah_produk','stock_produk','size_produk','harga_produk','produk_id'];
    public function produk(){
    	return $this->belongsTo('App\Produk','produk_id');
    }
    public function promo(){
        return $this->hasMany('App\Promo');
    }
    public function galery(){
        return $this->hasMany('App\Galery');
    }

}

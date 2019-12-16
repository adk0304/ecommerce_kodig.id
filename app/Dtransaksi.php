<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dtransaksi extends Model
{
    //
    protected $table = "dtransaksi";
    protected $primaryKey = "id";
    public function produk(){
    	return $this->belongsTo('App\Produk');
    }
    public function transaksi(){
    	return $this->belongsTo('App\Transaksi');
    }
}

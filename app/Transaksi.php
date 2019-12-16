<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    // 
    protected $table = "transaksi";
    protected $primaryKey = "id";

    public function dtransaksi(){
        return $this->hasMany('App\Dtransaksi');
}

    public function user(){
    	return $this->belongsTo('App\User');
	}
}

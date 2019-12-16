<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    //
    public function produk(){
    	return $this->hasMany('App\Produk','produk_id');
    }
    public function promo(){
        return $this->hasMany('App\Promo');
    }
    public function galery(){
        return $this->hasMany('App\Galery');
    }
}

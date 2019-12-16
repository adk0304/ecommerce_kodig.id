<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "produk";
    protected $primaryKey = "id";
    protected $fillable = ['nama_produk','jenis_produk'];
    public function produkatt(){
        return $this->hasMany('App\Produkatt');
    }
  
    
}

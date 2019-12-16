<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    //
    protected $table = "promo";
    protected $primaryKey = "id";
    protected $fillable = ['nama_promo','jenis_promo','nominal_promo','expired_date','produkatt_id'];
    public function produkatt(){
    	return $this->belongsTo('App\Produkatt','produkatt_id');
    }
}

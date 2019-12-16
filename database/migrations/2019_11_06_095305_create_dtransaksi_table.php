<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDtransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtransaksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_barang')->nullable();
            $table->integer('satuan_barang')->nullable();
            $table->integer('sub_harga')->nullable(); 
            $table->integer('poin_transaksi')->nullable(); 
            $table->integer('produk_id')->nullable();
            $table->integer('transaksi_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dtransaksi');
    }
}

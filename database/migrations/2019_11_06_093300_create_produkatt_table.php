<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukattTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produkatt', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('SKU')->nullable();
            $table->string('warna_produk')->nullable();
            $table->integer('jumlah_produk')->nullable();
            $table->integer('stock_produk')->nullable();
            $table->integer('size_produk')->nullable();
            $table->integer('harga_produk')->nullable();
            $table->integer('produk_id')->nullable();

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
        Schema::dropIfExists('produkatt');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nomor_transaksi')->nullable();
            $table->date('tgl_transaksi')->nullable();
            $table->double('total_harga')->nullable();
            $table->text('alamat_kirim')->nullable();
            $table->string('invoice')->nullable();
            $table->bolean('status')->nullable();
            $table->text('keterangan')->nullable();
            $table->date('tgl_verif')->nullable();
            $table->string('bukti_tf')->nullable();
            $table->integer('dtransaksi_id')->nullable();
            $table->integer('user_id')->nullable();

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
        Schema::dropIfExists('transaksi');
    }
}

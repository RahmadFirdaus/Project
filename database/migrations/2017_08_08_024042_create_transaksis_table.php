<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tgl_transaksi');
            $table->integer('jumlah_barang');
            $table->integer('total');
            $table->timestamps();

            $table->integer('karyawan_id')->unsigned();
            $table->foreign('karyawan_id')->references('id')
                  ->on('karyawans')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->integer('barang_id')->unsigned();
            $table->foreign('barang_id')->references('id')
                  ->on('barangs')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->integer('pelanggan_id')->unsigned();
            $table->foreign('pelanggan_id')->references('id')
                  ->on('pelanggans')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelians', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('jenis');
            $table->string('kategori');
            $table->integer('jumlah');
            $table->string('status');
            $table->bigInteger('harga');
            $table->text('gambar');
            $table->text('deskripsi');
            $table->unsignedInteger('ID_Pemesanan');
            $table->foreign('ID_Pemesanan')->references('id')->on('pemesanans')->onDelete('cascade');
            $table->unsignedInteger('ID_User');
            $table->foreign('ID_User')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('pembelians');
    }
};

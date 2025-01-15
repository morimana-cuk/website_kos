<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('Keuangan', function (Blueprint $table) {
            $table->id('id_keuangan')->autoIncrement();
            $table->integer('jenis_properti')->comment('1 = kamar, 2 = rumah, 3 = ruko');
            $table->string('no_kamar')->nullable();
            $table->integer('jenis_pembayaran')->comment('1 = cash, 2 = transfer, 3 = qris');
            $table->string('bukti_pembayaran');
            $table->integer('nik');
            $table->timestamp('tgl_bayar');
            $table->integer('tagihan');
            $table->enum('status', ['1', '0'])->default('0')->comment('1 = terverifikasi, 0 = belum terverifikasi');

            #define relation
            $table->foreign('nik')->references('nik')->on('Penghuni');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('Keuangan');
    }
};

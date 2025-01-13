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
        Schema::create('Komplain', function (Blueprint $table) {
            $table->id('id_komplain')->autoIncrement();
            $table->integer('jenis_properti')->comment('1 = kamar, 2 = rumah, 3 = ruko');
            $table->string('no_kamar')->nullable();
            $table->string('komplain');
            $table->integer('nik');
            $table->timestamp('tgl_komplain');
            $table->enum('status',['1','0'])->default(0)->comment('1 = sudah diproses, 0 = belum diproses');

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
        Schema::dropIfExists('Komplain');
    }
};

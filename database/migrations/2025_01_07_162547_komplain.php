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
            $table->string('no_kamar');
            $table->string('komplain');
            $table->integer('nik');
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

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
        Schema::create('Properti', function (Blueprint $table) {
            $table->integer('id_properti')->autoIncrement();
            $table->integer('jenis_properti')->comment('1 = kamar, 2 = rumah, 3 = ruko');
            $table->string('no_kamar')->nullable();
            $table->string('fasilitas');
            $table->integer('harga');
            $table->enum('status', ['1', '0'])->comment('1 = tidak tersedia, 0 = tersedia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('Properti');
    }
};

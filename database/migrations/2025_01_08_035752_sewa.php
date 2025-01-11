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
        Schema::create('Sewa', function (Blueprint $table) {
            $table->id('id_sewa')->autoIncrement();
            $table->integer('id_penghuni');
            $table->integer('id_properti');


            #define relation
            $table->foreign('id_penghuni')->references('nik')->on('Penghuni');
            $table->foreign('id_properti')->references('id_properti')->on('Properti');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('Sewa');
    }
};

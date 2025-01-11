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
        Schema::create('Penghuni', function (Blueprint $table) {
            $table->integer('nik')->primary();
            $table->string('nama');
            $table->date('tgl_masuk');
            $table->date('tgl_keluar')->nullable();
            $table->string('no_hp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('Penghuni');
    }
};

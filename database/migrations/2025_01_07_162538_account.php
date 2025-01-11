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
        Schema::create('Account', function (Blueprint $table) {
            $table->id('id_account')->autoIncrement();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('role')->comment('1 = admin, 2 = penghuni');
            $table->integer('nik')->nullable();
            #define ralation
            $table->foreign('nik')->references('nik')->on('Penghuni');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('Account');
    }
};

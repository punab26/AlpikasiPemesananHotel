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
        Schema::create('harga_hari_ini', function (Blueprint $table) {
            $table->id('id_hotel');
            $table->integer('available_room')->nullable(false);
            $table->date('tanggal')->nullable(false);
            $table->unsignedBigInteger('id_kamar')->nullable(false);
            $table->foreign('id_kamar')->references('id_kamar')->on('kamar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('harga_hari_ini');
    }
};
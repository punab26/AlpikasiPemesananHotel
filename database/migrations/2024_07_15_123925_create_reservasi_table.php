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
        Schema::create('reservasi', function (Blueprint $table) {
            $table->bigIncrements('id_reservasi')->nullable(false);
            $table->unsignedBigInteger('customer_id')->nullable(false);
            $table->foreign('customer_id')->references('customer_id')->on('customers');
            $table->date('tanggal')->nullable(false);
            $table->date('tanggal_mulai')->nullable(false);
            $table->date('tanggal_akhir')->nullable(false);
            $table->unsignedBigInteger('id_hotel')->nullable(false);
            $table->foreign('id_hotel')->references('id_hotel')->on('harga_hari_ini');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasi');
    }
};
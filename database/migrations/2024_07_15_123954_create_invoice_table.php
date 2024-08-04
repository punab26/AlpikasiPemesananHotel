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
        Schema::create('invoice', function (Blueprint $table) {
            $table->bigIncrements('id_invoice');
            $table->text('deskripsi')->nullable(false);
            $table->enum('status', ['bayar', 'dp', 'lunas'])->nullable(false);
            $table->integer('besar_dp')->nullable(true);
            $table->unsignedBigInteger('id_reservasi')->nullable(true);
            $table->foreign('id_reservasi')->references('id_reservasi')->on('reservasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice');
    }
};

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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->bigIncrements('id_payment');
            $table->unsignedBigInteger('customer_id')->nullable(false);
            $table->foreign('customer_id')->references('customer_id')->on('customers');
            $table->date('tanggal')->nullable(false);
            $table->enum('metode_bayar', ['cash', 'transfer'])->nullable(false);
            $table->unsignedBigInteger('id_invoice')->nullable(false);
            $table->foreign('id_invoice')->references('id_invoice')->on('invoice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};

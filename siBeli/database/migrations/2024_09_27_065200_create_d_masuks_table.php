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
        Schema::create('d_masuks', function (Blueprint $table) {
            $table->char('id_masuk',length:12)->primary();
            $table->char('kd_masuk',length:12)->foreign();
            $table->char('kd_barang_beli',length:12); 
            $table->integer('jumlah');
            $table->integer('subtotal');
            $table->timestamps();

            $table->foreign('kd_masuk') 
                ->references('kd_masuk') 
                ->on('masuks') 
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_masuks');
    }
};

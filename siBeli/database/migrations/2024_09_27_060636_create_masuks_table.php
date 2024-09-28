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
        Schema::create('masuks', function (Blueprint $table) {
            $table->char('kd_masuk',length:12)->primary();
            $table->date('tgl_masuk');
            $table->char('kd_supplier',length:12)->foreign();
            $table->integer('total_masuk');
            $table->timestamps(); 

            $table->foreign('kd_supplier') 
                ->references('kd_supplier') 
                ->on('suppliers') 
                ->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masuks');
    }
};

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
        Schema::create('tbarangs', function (Blueprint $table) {
            $table->char("kd_barang",length:12)
            $table->char("nama_barang",length:50)->unique();
            $table->string("satuan");
            $table->integer("harga_jual");
            $table->integer("harga_beli");
            $table->integer("stok");
            $table->char("status",length:12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbarangs');
    }
};

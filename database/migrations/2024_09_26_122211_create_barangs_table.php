<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->char("kd_barang", 25)->primary();
            $table->char("nama_barang", 50);
            $table->char("satuan", 10);
            $table->decimal("harga_jual", 10, 2); 
            $table->decimal("harga_beli", 10, 2);
            $table->integer("stok");
            $table->char("status", 14);
            $table->timestamps();
        });
    }
};

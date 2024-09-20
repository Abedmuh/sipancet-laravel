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
        Schema::create('assets', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->string('noUrut');
            $table->string('namaBarang');
            $table->string('kodeAsset')->unique();
            $table->string('qrCode');
            $table->string('kodeTelkom');
            $table->string('serialNumber')->nullable();
            $table->string('lokasi');
            $table->string('keterangan')->nullable();
            $table->string('kondisi');
            $table->string('status');
            $table->string('pelabuhan');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};

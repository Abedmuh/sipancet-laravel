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
            $table->uuid();
            $table->string('namaBarang');
            $table->integer('tahunPerolehan');
            $table->integer('kategori');
            $table->integer('grup');
            $table->integer('kelas')->nullable();
            $table->string('subKelas')->nullable();
            $table->string('noUrut');
            $table->string('kodeAsset')->unique();
            $table->string('qrCode');
            $table->string('kodeTelkom');
            $table->string('serialNumber')->nullable();
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

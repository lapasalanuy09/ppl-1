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
        Schema::create('data_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kegiatan');
            $table->string('lokasi');
            $table->dateTime('waktu');
            $table->string('timeline');
            $table->string('pemateri');
            $table->timestamps();
        });;
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kegiatan');
    }
};

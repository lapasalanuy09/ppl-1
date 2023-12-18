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
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('user_id')->constrained();
            $table->string('npm');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->integer('angkatan');
            $table->string('jurusan');
            $table->string('alamat_domisili');
	        $table->string('profil')->nullable();
            $table->string('nama_ibu');
            $table->string('nama_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('pekerjaan_ayah');
            $table->string('bukti_pembayaran');
            $table->enum('jalur_pendaftaran', ['SNBP', 'SNBT', 'MANDIRI']);
            $table->enum('pembelian_merchandise', ['Ya', 'Tidak']);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran');
    }
};

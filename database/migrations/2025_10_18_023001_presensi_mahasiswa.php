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
        Schema::create('presensi_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->constrained('mahasiswas')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('dosen_id')->constrained('dosens')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('jadwal_id')->constrained('jadwal_kuliahs')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('token_id')->constrained('token_presensis')->onUpdate('cascade')->onDelete('restrict');
            $table->date('tanggal');
            $table->dateTime('waktu_presensi');
            $table->enum('status', ['hadir', 'izin', 'sakit', 'alpha'])->default('hadir');
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensi_mahasiswas');
    }
};

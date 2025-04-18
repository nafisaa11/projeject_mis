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
        Schema::create('frses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_mahasiswa')->constrained('mahasiswas')->onDelete('cascade');
            $table->foreignId('id_dosen')->constrained('dosens')->onDelete('cascade');
            $table->foreignId('id_nilai')->constrained('nilais')->onDelete('cascade');
            $table->foreignId('id_jadwal_kuliah')->constrained('jadwal_kuliahs')->onDelete('cascade');;
            $table->integer('tahun_ajaran');
            $table->string('semester', ['Ganjil', 'Genap']);
            $table->string('disetujui', ['Belum', 'Ya', 'Tidak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

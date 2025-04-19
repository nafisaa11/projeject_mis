<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jadwal_kuliahs', function (Blueprint $table) {
            $table->id('id_jadwal_kuliah');
            $table->unsignedBigInteger('id_matakuliah');
            $table->string('hari');
            $table->date('tanggal');
            $table->string('ruangan');
            $table->time('jam_awal');
            $table->time('jam_akhir');
            $table->timestamps();

            // Foreign Key ke tabel mata_kuliahs
            $table->foreign('id_matkul')->references('id_matkul')->on('matkuls')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jadwal_kuliahs');
    }
};

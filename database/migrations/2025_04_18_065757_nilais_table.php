<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaisTable extends Migration
{
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->id('id_nilai');
            $table->unsignedBigInteger('id_mahasiswa');
            $table->unsignedBigInteger('id_matakuliah');
            $table->decimal('nilai_angka', 5, 2);
            $table->string('nilai_huruf', 2);
            $table->timestamps();

            $table->foreign('id_mahasiswa')->references('id_mahasiswa')->on('mahasiswas')->onDelete('cascade');
            $table->foreign('id_matakuliah')->references('id_matakuliah')->on('mata_kuliahs')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('nilais');
    }
}


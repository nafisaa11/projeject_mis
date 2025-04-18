<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_nilai';

    protected $fillable = [
        'id_mahasiswa',
        'id_matakuliah',
        'nilai_angka',
        'nilai_huruf',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }

    // public function mataKuliah()
    // {
    //     return $this->belongsTo(MataKuliah::class, 'id_matakuliah');
    // }
}

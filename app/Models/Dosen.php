<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosens';
    protected $primaryKey = 'id_dosen';
    protected $fillable = [
        'nama',
        'nip',
        'email',
        'no_telp',
        'alamat',
        'jenis_kelamin',
        'agama'
    ];

    // Relasi ke tabel mata_kuliahs
    // public function mataKuliah()
    // {
    //     return $this->hasMany(Matkul::class, 'id_dosen');
    // }
}

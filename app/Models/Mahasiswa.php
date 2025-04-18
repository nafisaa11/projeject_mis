<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';
    protected $fillable = [
        'nama',
        'nrp',
        'email',
        'prodi',
        'password',
        'no_telp',
        'tanggal_lahir',
        'tempat_lahir',
        'jenis_kelamin',
        'agama'
    ];

    // Jika Anda ingin menyembunyikan password saat mengambil data
    protected $hidden = ['password'];
   
}

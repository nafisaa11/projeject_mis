<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal_kuliah extends Model
{
    protected $table = 'jadwal_kuliah';
    protected $fillable = [
        'hari',
        'tanggal',
        'email',
        'ruangan',
        'jam_awal',
        'jam_akhir'
    ];
}

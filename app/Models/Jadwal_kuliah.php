<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKuliah extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_jadwal_kuliah';

    protected $fillable = [
        'id_matakuliah',
        'hari',
        'tanggal',
        'ruangan',
        'jam_awal',
        'jam_akhir',
    ];

    // Mengambil nama matakuliah
    public function mataKuliah()
    {
        return $this->belongsTo(MataKuliah::class, 'id_matkul');
    }
}


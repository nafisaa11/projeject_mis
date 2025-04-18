<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'matkuls';
    protected $fillable = ['kode_matkul', 'nama_matkul', 'sks'];

    public function frs()
    {
        return $this->hasMany(Frs::class);
    }
}

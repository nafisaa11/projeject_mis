<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Frs extends Model
{
    protected $table = 'frs_migration';
    protected $fillable = ['name', 'description', 'status'];

    public function frs()
    {
        return $this->hasMany(Frs::class);
    }
}

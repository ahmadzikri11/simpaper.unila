<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'fakultas',

    ];
    public function fakultass()
    {
        return $this->hasOne(prodi::class, 'fakultas_id', 'id');
    }
}

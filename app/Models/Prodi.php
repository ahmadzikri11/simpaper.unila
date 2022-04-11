<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'prodi',
        'fakultas_id',
    ];
    public function prodis()
    {
        return $this->hasOne(Fakultas::class, 'id', 'fakultas_id');
    }
}

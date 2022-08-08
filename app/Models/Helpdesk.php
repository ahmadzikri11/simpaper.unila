<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Helpdesk extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'layanan',
        'keterangan',
        'prioritas',
    ];

    // protected $table = 'helpdesks';

    public function getname()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}

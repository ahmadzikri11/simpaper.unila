<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'link_repository',
        'status',
        'validator',
    ];

    public function getuserrepo()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}

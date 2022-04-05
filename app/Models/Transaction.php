<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'file1',
        'file2',
        'file3',
        'periode_wisuda',
        'token',
        'user_id',
        'status',
        'messege',
    ];
    public function transactions()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}

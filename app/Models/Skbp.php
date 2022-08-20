<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skbp extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'ktm',
        'spp',
        'status',
    ];


    public function getskbp()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}

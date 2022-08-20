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
        'file4',
        'ktm',
        'photo',
        'periode_wisuda',
        'user_id',
        'status',
        'messege',
        'validator',
        'link_repository',
        'tanda_terima',
        'tahun_wisuda',
        'no_surat',
        'uuid',
    ];
    public function transactions()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}

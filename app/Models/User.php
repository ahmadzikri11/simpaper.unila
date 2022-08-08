<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Transactions;
use App\Models\Transaction;
use App\Models\Skbp;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'npm',
        'phone',
        'prodi_id',
        'fakultas_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function users()
    {
        return $this->hasMany(Transaction::class, 'user_id', 'id');
    }
    public function getskbp()
    {
        return $this->hasMany(Skbp::class, 'user_id', 'id');
    }

    public function getfakultas()
    {
        return $this->hasOne(Fakultas::class, 'id', 'fakultas_id');
    }
    public function getprodi()
    {
        return $this->hasOne(Prodi::class, 'id', 'prodi_id');
    }
    public function getRepository()
    {
        return $this->hasOne(Repository::class, 'user_id', 'id');
    }
    
}

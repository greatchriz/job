<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use App\Models\JobApplication;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Traits\HasPermissions;
use App\Models\Visa;
use App\Models\Message;
use App\Models\Flight;



class User extends Authenticatable implements MustVerifyEmail
{
    use HasRoles, HasPermissions;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    // public function getAccountBalanceAttribute($value)
    // {
    //     return '$' . number_format($value, 2);
    // }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function applications()
    {
        return $this->hasMany(JobApplication::class);
    }


    public function visa()
    {
        return $this->belongsTo(Visa::class);
    }

    //has many messages


    public function messages()
    {
        return $this->morphToMany(Message::class, 'messagable');
    }

    // flights relationship
    public function flights()
    {
        return $this->hasMany(Flight::class);
    }

    //transactions
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }


}

<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{

    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function  getPersonalImagePathAttribute()
    {
        return asset('uploads/clients/'. $this->personal_image);
    }// end of get Image Path


    ///////////////// Relations \\\\\\\\\\\\\\\\\
    public function address()
    {
        return $this->hasOne(Address::class, 'user_id');
    }
    public function rate()
    {
        return $this->hasMany(Rate::class, 'user_id');
    }
    public function request()
    {
        return $this->hasMany(Request::class, 'user_id');
    }
    public function message()
    {
        return $this->hasMany(Message::class, 'user_id');
    }
    public function chat()
    {
        return $this->hasMany(Chat::class, 'user_id');
    }

    //////////// JWT abstract class methods //////////////////////////////////////////////////
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}

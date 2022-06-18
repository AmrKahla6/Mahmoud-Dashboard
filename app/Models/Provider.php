<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;

class Provider extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    protected $guarded = [];

    protected $hidden = [
        'password',
    ];


    ///////////////// Relations \\\\\\\\\\\\\\\\\

    public function address()
    {
        return $this->hasOne(Address::class, 'provider_id');
    }
    public function offer()
    {
        return $this->hasMany(Offer::class, 'provider_id');
    }
    public function image()
    {
        return $this->hasMany(Image::class, 'provider_id');
    }
    public function department()
    {
        return $this->hasMany(Department::class, 'provider_id');
    }
    public function message()
    {
        return $this->hasMany(Message::class, 'provider_id');
    }
    public function chat()
    {
        return $this->hasMany(Chat::class, 'provider_id');
    }
    public function rate()
    {
        return $this->hasMany(Rate::class, 'provider_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;

class Admin extends Authenticatable
{
    // Make Class make authentication

    use Notifiable;
    use LaratrustUserTrait;

    protected $guarded = [];

    protected $hidden = [
        'password',
    ];
}
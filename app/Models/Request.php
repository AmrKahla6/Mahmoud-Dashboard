<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $guarded = [];

    ///////////////// Relations \\\\\\\\\\\\\\\\\

    public function notifications()
    {
        return $this->hasOne(Notification::class, 'provider_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function offer()
    {
        return $this->hasMany(Offer::class, 'request_id');
    }
    public function department()
    {
        return $this->belongsTo(Department::class, 'depart_id')->select('id');
    }
}

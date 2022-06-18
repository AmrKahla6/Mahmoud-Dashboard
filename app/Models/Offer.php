<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $guarded = [];

    ///////////////// Relations \\\\\\\\\\\\\\\\\

    public function notifications()
    {
        return $this->hasOne(Notification::class, 'offer_id');
    }
    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }
    public function request()
    {
        return $this->belongsTo(Request::class, 'request_id');
    }
}

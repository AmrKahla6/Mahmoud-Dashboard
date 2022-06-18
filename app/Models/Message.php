<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
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
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function chat()
    {
        return $this->belongsTo(Chat::class, 'message_id');
    }
}

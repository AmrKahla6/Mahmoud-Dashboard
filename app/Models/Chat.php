<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $guarded = [];

    ///////////////// Relations \\\\\\\\\\\\\\\\\\\\\\
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }
    public function message()
    {
        return $this->hasMany(Message::class, 'chat_id');
    }
}

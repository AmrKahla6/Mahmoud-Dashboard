<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $guarded = [];

    //////////////// Relations \\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    public function offer()
    {
        return $this->belongsTo(Offer::class, 'offer_id');
    }
    public function message()
    {
        return $this->belongsTo(Message::class, 'offer_id');
    }
    public function request()
    {
        return $this->belongsTo(Department::class, 'request_id');
    }
}

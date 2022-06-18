<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $guarded = [];
    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

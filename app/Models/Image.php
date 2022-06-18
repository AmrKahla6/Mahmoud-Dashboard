<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];

    ///////////////// Relations \\\\\\\\\\\\\\\\\
    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }
}

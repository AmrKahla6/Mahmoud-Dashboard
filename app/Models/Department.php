<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded = [];

    /////////////////// Relations \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }
    public function request()
    {
        return $this->hasMany(Request::class, 'depart_id');
    }

    public function  getImagePathAttribute()
    {
        return asset('uploads/departments/'. $this->image);
    }// end of get Image Path
}

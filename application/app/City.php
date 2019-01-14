<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['city_name', 'country_id'];

    public function country()
    {
        return $this->belongsTo(\App\Country::class);
    }
    public function municipalities()
    {
        return $this->hasMany(\App\Municipality::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'image',
        'country',
        'city',
        'status',
    ];

    public function country()
{
    return $this->belongsTo(Country::class, 'country');
}

public function city()
{
    return $this->belongsTo(City::class, 'city');
}

}

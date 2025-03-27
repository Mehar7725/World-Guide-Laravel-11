<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'city_image',
        'city_name',
        'country',
        'description',
        'city_video',
        'city_map',
        'best_time',
        'transportation',
        'weather',
        'information',
        'business_url',
        'taxi_url',
        'law_url',
        'lawyer_url',
        'event_url',
        'tours_url',
        'car_url',
        'estate_url',
        'hotel_url',
        'restaurant_url',
        'coffee_url',
        'bars_url',
        'status'
    ];
}

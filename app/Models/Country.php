<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'country_image',
        'country_name',
        'country_code',
        'country_video',
        'country_map',
        'best_time',
        'transportation',
        'weather',
        'information',
        'language',
        'electric',
        'electric_image',
        'currency',
        'currency_image',
        'facts_url',
        'history_url',
        'dining_url',
        'visa_info_url',
        'visa_light_url',
        'tours_url',
        'constitution_url',
        'emergency_url',
        'embassies_url',
        'news_url',
        'status'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adds extends Model
{
  
    protected $fillable = [
        'user_id',
        'payment_id',
        'price',
        'time',
        'title',
        'address',
        'country',
        'city',
        'category',
        'website',
        'phone',
        'whatsapp',
        'price_details',
        'price_from',
        'price_to',
        'availability', 
        'all_links', 
        'all_faq', 
        'description',
        'video',
        'image',
        'featured_image',
        'logo',
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

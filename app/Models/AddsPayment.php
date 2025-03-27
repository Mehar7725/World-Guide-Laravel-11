<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddsPayment extends Model
{
    //

    protected $fillable = [
        'user_id',
        'payment_id',
        'name',
        'number',
        'cvv',
        'date',
        'amount',
        'status',
    ];

}

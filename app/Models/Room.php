<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'id',
        'photo',
        'number',
        'name',
        'type',
        'amenities',
        'price',
        'offerPrice',
        'status',
        'bookings',
    ];

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}

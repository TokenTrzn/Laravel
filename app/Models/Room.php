<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'photo',
        'number',
        'name',
        'type',
        'amenities',
        'price',
        'offerPrice',
        'status',
    ];

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'id',
        'guestName',
        'orderDate',
        'orderDateHour',
        'checkIn',
        'checkInHour',
        'checkOut',
        'checkOutHour',
        'specialRequest',
        'type',
        'number',
        'status',
        'price',
        'description',
        'amenities',
        'rooms',
    ];

    public function booking()
    {
        return $this->hasMany(Room::class);
    }
}

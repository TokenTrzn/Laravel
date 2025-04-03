<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
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
        'room_id'
    ];

    public function booking()
    {
        return $this->belongsTo(Room::class);
    }
}

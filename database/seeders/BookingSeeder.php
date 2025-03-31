<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Booking::create([
            'guestName' => 'Alberto',
            'orderDate' => '2025-03-31',
            'orderDateHour' => '10:00:00',
            'checkIn' => '2025-03-31',
            'checkInHour' => '10:00:00',
            'checkOut' => '2025-04-03',
            'checkOutHour' => '10:00:00',
            'specialRequest' => true,
            'type' => 'Premium A',
            'number' => 3456,
            'status' => 'Booked',
            'price' => 120.99,
            'description' => 'Premium Room for 2',
            'amenities' => ['Wifi', 'Shower', 'TV'],
        ]);
    }
}

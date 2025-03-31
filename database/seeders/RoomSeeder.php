<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Room::create([
            'photo' => 'www.foto.png',
            'number' => 3456,
            'name' => 'Alberto',
            'type' => 'Premium A',
            'amenities' => ['Wifi', 'Shower', 'TV'],
            'price' => 120.99,
            'offerPrice' => 99.99,
            'status' => 'Booking',
        ]);
    }
}

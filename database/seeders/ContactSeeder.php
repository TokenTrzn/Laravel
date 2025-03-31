<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'date' => '2025-03-31',
            'hour' => '10:00:00',
            'name' => 'Alberto',
            'email' => 'alberto@gmail.com',
            'phone' => '+34 645630341',
            'comment' => 'Busco habitación doble en verano',
            'isArchived' => false,
        ]);
    }
}

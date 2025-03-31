<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Activity::create([
            'type' => 'surf',
            'user_id' => 1,
            'datetime' => now(), 
            'paid' => true,
            'notes' => 'Muy divertido',
            'satisfaction' => 8,
        ]);
    }
}

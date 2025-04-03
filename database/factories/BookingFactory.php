<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Booking;
use App\Models\Room;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Booking::class;
    public function definition(): array
    {
        return [
            'guestName' => $this->faker->name(),
            'orderDate' => $this->faker->date('Y-m-d'),
            'orderDateHour' => $this->faker->time('H:i:s'),
            'checkIn' => $this->faker->date('Y-m-d'),
            'checkInHour' => $this->faker->time('H:i:s'),
            'checkOut' => $this->faker->date('Y-m-d'),
            'checkOutHour' => $this->faker->time('H:i:s'),
            'specialRequest' => $this->faker->boolean(),
            'type' => $this->faker->randomElement(['Single', 'Double', 'Suite']), 
            'number' => $this->faker->randomNumber(3, true), 
            'status' => $this->faker->randomElement(['Check In', 'Check Out', 'In progress']),
            'price' => $this->faker->randomFloat(2, 50, 500), // Precio en formato decimal
            'description' => $this->faker->paragraph(),
            'amenities' => $this->faker->words(7, true), 
            'room_id' => Room::inRandomOrder()->first()->id
        ];
    }
}

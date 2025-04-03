<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Room;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Room::class;
    public function definition(): array
    {
        return [
            'photo' => $this->faker->imageUrl(640, 480, 'hotel'), 
            'number' => $this->faker->randomNumber(3, true), 
            'name' => $this->faker->word(), 
            'type' => $this->faker->randomElement(['Single', 'Double', 'Suite', 'Deluxe']), 
            'amenities' => $this->faker->words(7, true), 
            'price' => $this->faker->randomFloat(2, 50, 500), 
            'offerPrice' => $this->faker->randomFloat(2, 30, 400), 
            'status' => $this->faker->randomElement(['Available', 'Booked']),
        ];
    }
}

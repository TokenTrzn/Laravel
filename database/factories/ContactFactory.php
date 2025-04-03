<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Contact::class;
    public function definition(): array
    {
        return [
            'date' => $this->faker->date('Y-m-d'),
            'hour' => $this->faker->time('H:i:s'),
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'comment' => $this->faker->paragraph(),
            'isArchived' => $this->faker->boolean(),
        ];
    }
}

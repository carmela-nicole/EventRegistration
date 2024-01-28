<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
// THIS IS FRANCES RIEL A. JULIO CODE
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'date' => fake()->date(),
            'location' => fake()->city,
        ];
    }
}

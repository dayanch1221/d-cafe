<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restourants>
 */
class RestourantsFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake()->firstName,
            'location_id'=> fake()->streetName,
            'phone_number'=> fake()->numberBetween(99360000000, 99369999999),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Boxuser;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Concept>
 */
class ConceptFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'title' => fake()->name,
            'description' =>fake()->text,
            'boxuser_id' => Boxuser::factory()
        ];
    }
}

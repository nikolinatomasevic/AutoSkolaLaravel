<?php

namespace Database\Factories;

use App\Models\AutoSkola;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstruktorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'licenca' => $this->faker->unique()->word(),
            'auto_skola_id' => AutoSkola::factory()
        ];
    }
}

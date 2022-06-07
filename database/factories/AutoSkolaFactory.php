<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AutoSkolaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->unique()->company(),
            'grad' => $this->faker->city(),
            'cena_obuke' => $this->faker->numberBetween($min = 25000, $max = 125000),
            'broj_vozila' => $this->faker->numberBetween($min = 1, $max = 50)
        ];
    }
}

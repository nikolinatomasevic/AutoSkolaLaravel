<?php

namespace Database\Factories;

use App\Models\Instruktor;
use Illuminate\Database\Eloquent\Factories\Factory;

class PolaznikFactory extends Factory
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
            'kategorija' => $this->faker->randomElement($array = array('A', 'B', 'C', 'D', 'E', 'F')),
            'teorija' => $this->faker->randomElement($array = array('POLOZIO/LA', 'NIJE POLOZIO/LA')),
            'instruktor_id' => Instruktor::factory(),
        ];
    }
}

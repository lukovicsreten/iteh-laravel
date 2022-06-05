<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HalaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->colorName() . ' Arena',
            'adresa' => $this->faker->streetAddress(),
            'grad' => $this->faker->city(),
            'kapacitet' => $this->faker->numberBetween($min = 10, $max = 100000),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PevacFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'imePrezime' => $this->faker->name(),
            'vrstaMuzike' => $this->faker->randomElement($array = array('Etno', 'Pank', 'Rok', 'Folk', 'Rep', 'Pop')),
            'brojKoncerata' => $this->faker->numberBetween($min = 0, $max = 300),
        ];
    }
}

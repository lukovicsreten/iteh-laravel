<?php

namespace Database\Factories;

use App\Models\Hala;
use App\Models\Pevac;
use Illuminate\Database\Eloquent\Factories\Factory;

class KoncertFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'datum' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'cenaKarte' => $this->faker->numberBetween($min = 1, $max = 1000),
            'hala_id' => Hala::factory(),
            'pevac_id' => Pevac::factory(),
        ];
    }
}

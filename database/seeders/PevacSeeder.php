<?php

namespace Database\Seeders;

use App\Models\Pevac;
use Illuminate\Database\Seeder;

class PevacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pevac::factory()->count(90)->create();
    }
}

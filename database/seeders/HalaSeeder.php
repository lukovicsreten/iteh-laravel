<?php

namespace Database\Seeders;

use App\Models\Hala;
use Illuminate\Database\Seeder;

class HalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hala::factory()->count(30)->create();
    }
}

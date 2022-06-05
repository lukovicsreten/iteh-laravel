<?php

namespace Database\Seeders;

use App\Models\Koncert;
use Illuminate\Database\Seeder;

class KoncertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Koncert::factory()->count(60)->create();
    }
}

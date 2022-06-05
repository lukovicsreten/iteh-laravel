<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $halaSeeder = new HalaSeeder;
        $koncertSeeder = new KoncertSeeder;
        $pevacSeeder = new PevacSeeder;

        $halaSeeder->run();
        $koncertSeeder->run();
        $pevacSeeder->run();
    }
}

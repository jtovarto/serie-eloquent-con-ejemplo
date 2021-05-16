<?php

namespace Database\Seeders;

use Database\Seeders\DogSeeder;
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
        $this->call(DogSeeder::class);
    }
}

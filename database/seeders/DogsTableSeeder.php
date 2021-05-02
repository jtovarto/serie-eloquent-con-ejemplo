<?php

namespace Database\Seeders;

use App\Models\Dog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dog::factory()->count(10)->create();
    }
}

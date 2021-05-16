<?php

namespace Database\Seeders;

use App\Models\Dog;
use Illuminate\Database\Seeder;

class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dog::factory()->create(['name' => 'Joe', 'age' => 5, 'gender' => 'male']);
        Dog::factory()->create(['name' => 'Jock', 'age' => 7, 'gender' => 'male']);
        Dog::factory()->create(['name' => 'Jackie', 'age' => 2, 'gender' => 'female']);
        Dog::factory()->create(['name' => 'Jane', 'age' => 9, 'gender' => 'female']);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Valuebjects\OptionsVO;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()->create([
            'name'    => 'Collares',
            'price'   => 1400.5,
            'active'  => true,
            'options' => new OptionsVO(['color' => 'azul']),
        ]);

        Product::factory(5)->create();
    }
}

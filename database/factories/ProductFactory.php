<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Support\Str;
use App\Valuebjects\OptionsVO;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'  => $this->faker->words(3, true),
            'price' => rand(1000, 9000),
            'active'=> $this->faker->boolean(),
            'slug'  => function ($attr) {
                return Str::slug($attr['name']);
            },
            'options' => new OptionsVO([
                'color' => $this->faker->randomElement(['rojo', 'azul', 'verde'])
            ])
        ];
    }
}

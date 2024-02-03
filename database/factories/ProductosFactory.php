<?php

namespace Database\Factories;

use App\Models\Productos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Productos>
 */
class ProductosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model= Productos::class;

    public function definition(): array
    {
        return [
            'nombre'        => fake()->name(),
            'precio'   => fake()->numberBetween(10,200000),
            'stock'         => fake()->numberBetween(0,100),
            
        ];
    }
}

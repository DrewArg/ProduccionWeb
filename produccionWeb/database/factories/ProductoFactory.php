<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    public function definition():array
    {
           return [
               'titulo' => fake()->domainName(),
               'sinposis' => fake()->paragraph(3),
               'stock' => fake()->numberBetween(0,1000),
               'precio'=>fake()->randomFloat(2,1000),
               'autor'=>fake()->name(),
               'genero'=>fake()->colorName(),
               'editorial'=>fake()->domainName(),
               'tipo_producto'=>'fisico',
               'imagen'=>fake()->imageUrl(640,480),
               'puntuacion'=>fake()->randomFloat(1,0,5)

           ];
    }
}

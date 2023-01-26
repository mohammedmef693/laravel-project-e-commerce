<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\product;
use Faker\Generator as Faker;


$factory->define(product::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence,
        'description'=>$faker->paragraph(1),
        'unit'=>$faker->randomElement(['kg','m','Q']),
        'price'=>$faker->randomFloat(2,1,500),
        'total'=>$faker->numberBetween(2,200),
        'category_id'=>$faker->numberBetween(1,50),
        
    ];
});

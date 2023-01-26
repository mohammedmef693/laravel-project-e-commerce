<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ticket;
use Faker\Generator as Faker;

$factory->define(ticket::class, function (Faker $faker) {
    return [
        'user_id' =>$faker->numberBetween(1,501),
        'order_id' =>$faker->numberBetween(1,50),
        'title' =>$faker->sentence,
        'message' =>$faker->paragraph(6),
        'ticket_type_id' =>$faker->numberBetween(1,4),
        'status' =>$faker->randomElement(['pinding','closed','waiting']),
    ];
});

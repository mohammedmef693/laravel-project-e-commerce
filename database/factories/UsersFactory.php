<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\user;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(user::class, function (Faker $faker) {
    return [
       
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'email' => $faker->unique()->safeEmail,
            'email_verified_at' => $faker->randomElements([true,false]),
            'mobile' =>$faker->phoneNumber(),
            'mobile_verified_at' => $faker->randomElements([true,false]),
            'shipping_address'=>$faker->numberBetween(1,100),
            'billing_adress'=>$faker->numberBetween(1,100),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
       
    ];
});

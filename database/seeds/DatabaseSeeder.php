<?php

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
    // $this->call(usersSeeder::class);
    //  $this->call(AddressesSeeder::class);
    //  $this->call(usersSeeder::class);
    //  $this->call(productsSeeder::class);
    //  $this->call(imagesSeeder::class);
    //  $this->call(reviewsSeeder::class);
    // $this->call(categorySeeder::class);
    // $this->call(tagSeeder::class);
    // $this->call(tagSeeder::class);
    // $this->call(roleSeeder::class);
    $this->call(tictetSeeder::class);
    }
}

<?php

use Illuminate\Database\Seeder;

class reviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\review',1000)->create();
    }
}

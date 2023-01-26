<?php

use Illuminate\Database\Seeder;

class tictetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\ticket',150)->create();
    }
}

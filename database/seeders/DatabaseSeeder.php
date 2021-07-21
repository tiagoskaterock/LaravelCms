<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create(); // works


        \App\Models\Post::factory(1)->create(); // works


        // factory('App\User', 10)->create(); // this fucking shit does not work because Laravel sucks
    }
}

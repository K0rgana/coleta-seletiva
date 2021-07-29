<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use \App\Models\Address;
use \App\Models\Category;
use \App\Models\Ad;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        Category::factory(5)-> create();
        Address::factory(5)-> create();
        Ad::factory(15)-> create();
    }
}

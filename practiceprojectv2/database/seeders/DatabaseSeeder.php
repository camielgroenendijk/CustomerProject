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
        // \App\Models\User::factory(10)->create();
        \App\Models\Customer::factory(25)->create();
        \App\Models\Appointment::factory(25)->create();
        \App\Models\Recipe::factory(25)->create();


    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        'name' => $this->faker->name,
        'age' => $this->faker->numberBetween(1,100),
        'nationality' =>$this->faker->country
    }
}


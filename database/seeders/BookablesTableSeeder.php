<?php

namespace Database\Seeders;

use App\Models\Bookable;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bookable::factory()->count(100)->create();
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Admin\Models\Country;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Country::class, 90)->create();
    }
}

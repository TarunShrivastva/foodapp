<?php

use Illuminate\Database\Seeder;
use App\Admin\Models\City;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(City::class, 150)->create();
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Admin\Models\State;

class RestaurentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(State::class, 50)->create();
    }
}

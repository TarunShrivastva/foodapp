<?php

use Illuminate\Database\Seeder;
use App\Admin\Models\Region;

class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Region::class, 50)->create();
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Admin\Models\SubCategory;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SubCategory::class, 50)->create();
    }
}

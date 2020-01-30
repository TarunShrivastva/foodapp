<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin\Models\SubCategory;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(SubCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'created_at' => Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon::now()->toDateTimeString(),
    ];
});

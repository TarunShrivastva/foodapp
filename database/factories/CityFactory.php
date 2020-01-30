<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin\Models\City;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(City::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
        'created_at' => Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon::now()->toDateTimeString(),
    ];
});

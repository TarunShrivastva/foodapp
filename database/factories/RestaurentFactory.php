<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin\Models\Restaurent;
use Faker\Generator as Faker;
use Carbon\Carbon;
use App\Admin\Models\State;

$factory->define(Restaurent::class, function (Faker $faker) {
    return [
        'name' => $faker->state,
        'created_at' => Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon::now()->toDateTimeString(),
    ];
});

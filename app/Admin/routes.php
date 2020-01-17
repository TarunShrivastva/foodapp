<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('countries', CountryController::class);
    $router->resource('states', StateController::class);
    $router->resource('cities', CityController::class);
    $router->resource('restaurents', RestaurentController::class);
    $router->resource('foods', FoodController::class);
    $router->resource('restaurents_with_foods', RestaurentFoodController::class);
});

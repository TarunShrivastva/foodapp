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
    $router->resource('users', UserController::class);
    $router->resource('orders', OrderController::class);
    $router->resource('restaurent-review-ratings', RestaurentReviewRatingController::class);
    $router->resource('categories', CategoryController::class);
    $router->resource('sub-categories', SubCategoryController::class);
    $router->resource('regions', RegionController::class);
});

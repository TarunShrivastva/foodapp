<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FrontendServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Admin\Repositories\Restaurent\RestaurentRepositoryInterface',
            'App\Admin\Repositories\Restaurent\RestaurentRepository'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

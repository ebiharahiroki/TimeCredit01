<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\HourServiceInterface', 'App\Services\Hourservice');
        $this->app->bind('App\Repositories\HourRepositoryInterface', 'App\Repositories\HourRepository');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \URL::forceScheme('https');

        \URL::forceScheme('https');
        $this->app['request']->server->set('HTTPS', 'on');
    }
}

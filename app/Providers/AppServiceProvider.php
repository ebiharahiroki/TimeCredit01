<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\HourRepositoryInterface;
use App\Repositories\HourRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(HourRepositoryInterface::class, HourRepository::class);
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

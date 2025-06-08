<?php

namespace Fakenik;

use Illuminate\Support\ServiceProvider;
use Fakenik\Generator;
use Fakenik\DateOfBirth;

class FakenikServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/fakenik.php' => \config_path('fakenik.php'),
            ], 'lalusahibul-fakenik');
        }

        $this->mergeConfigFrom(
            __DIR__ . '/../config/fakenik.php',
            'fakenik'
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Generator::class, function ($app) {
            return new Generator(
                $app->make(DateOfBirth::class)
            );
        });
    }
}

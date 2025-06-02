<?php

namespace Fakenik;

use Illuminate\Support\ServiceProvider;

class FakenikServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Generator::class, function () {
            return new Generator();
        });
    }
}

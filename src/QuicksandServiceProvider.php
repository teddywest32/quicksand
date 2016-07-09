<?php

namespace Quicksand;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\ServiceProvider;

class QuicksandServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/quicksand.php' => config_path('quicksand.php'),
        ]);
    }

    public function register()
    {
        $this->app->singleton(RunForceDeletePolicy::class);
        $this->commands([RunForceDeletePolicy::class]);
    }
}

<?php

namespace Stimata;

use Illuminate\Support\ServiceProvider;

class StimataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/stimata.php', 'stimata'
        );

        $this->app->singleton(StimataClient::class, function ($app) {
            return new StimataClient(config('stimata'));
        });

        $this->app->alias(StimataClient::class, 'stimata');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/stimata.php' => config_path('stimata.php'),
            ], 'stimata-config');
        }
    }
}
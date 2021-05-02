<?php

namespace Cafesource\Location;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Container\Container as Application;

class LocationServiceProvider extends ServiceProvider
{
    protected $config = __DIR__ . '/../config/location.php';

    /**
     * Option Service Provider Register
     */
    public function register()
    {
        # Location config
        $this->mergeConfigs();
        $this->registerManager($this->app);
        $this->registerBindings($this->app);
    }

    /**
     * Boot
     *
     * Set option configs
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/Database/Migrations/');

        $this->publishes([
            $this->config => config_path('location.php')
        ]);
    }

    /**
     * The location config merge to configs
     */
    protected function mergeConfigs()
    {
        $this->mergeConfigFrom($this->config, 'location');
    }

    /**
     * @param Application $app
     */
    protected function registerManager( Application $app )
    {
        $app->singleton(Province::class, function ( $app ) {
            return new Province($app[ 'config' ][ 'location' ]);
        });

        $app->singleton(City::class, function ( $app ) {
            return new City($app[ 'config' ][ 'location' ]);
        });
    }

    /**
     * @param Application $app
     */
    protected function registerBindings( Application $app )
    {
        $app->bind('province', function ( $app ) {
            return new Province($app[ 'config' ][ 'location' ]);
        });

        $app->bind('city', function ( $app ) {
            return new City($app[ 'config' ][ 'location' ]);
        });
    }

}

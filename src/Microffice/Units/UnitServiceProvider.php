<?php namespace Microffice\Units;

use Illuminate\Support\ServiceProvider;

/**
 * UnitServiceProvider
 *
 */ 

class UnitServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
    * Bootstrap the application.
    *
    * @return void
    */
    public function boot()
    {
        // The publication files to publish
        $this->publishes([
            __DIR__ . '/../../../views' => base_path('resources/views/vendor/microffice/units'),
        ]);

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../../../views', 'units');
    }
        
    /**
     * Register everything.
     *
     * @return void
     */
    public function register()
    {
        // Binding the configured implementation of the Unit Contract as singleton
        $this->app->singleton(
            'Microffice\Contracts\Units\Unit',
            \Config::get('units.handler')
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['Microffice\Contracts\Units\Unit'];
    }
}
<?php

namespace Fishmad\Checkmate;

use Illuminate\Support\ServiceProvider;

class CrudGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../publish/Crud/config/crudgenerator.php' => config_path('crudgenerator.php'),
        ]);

        if (\App::VERSION() <= '5.2') {
            $this->publishes([
                __DIR__ . '/../publish/Crud/public/css/app.css' => public_path('css/app.css'),
            ]);
        }

        $this->publishes([
            __DIR__ . '/../publish/Crud/resources/stubs/' => base_path('resources/crud-generator/'),
        ]);
		
        $this->publishes([
            __DIR__ . '/../publish/Crud/resources/views/' => base_path('resources/views/'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(
            'Fishmad\Checkmate\Commands\CrudCommand',
            'Fishmad\Checkmate\Commands\CrudControllerCommand',
            'Fishmad\Checkmate\Commands\CrudModelCommand',
            'Fishmad\Checkmate\Commands\CrudMigrationCommand',
            'Fishmad\Checkmate\Commands\CrudViewCommand',
            'Fishmad\Checkmate\Commands\CrudLangCommand',
            'Fishmad\Checkmate\Commands\CrudApiCommand',
            'Fishmad\Checkmate\Commands\CrudApiControllerCommand'
        );
    }
}

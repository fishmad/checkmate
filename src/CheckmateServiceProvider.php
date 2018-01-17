<?php

namespace Fishmad\Checkmate;

use File;
use Illuminate\Support\ServiceProvider;

class CheckmateServiceProvider extends ServiceProvider
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
  public function boot(\Illuminate\Routing\Router $router)
  {
	// $this->publishes([
		// __DIR__ . '/../publish/Middleware/' => app_path('Http/Middleware'),
	// ]);

	// $this->publishes([
		// __DIR__ . '/../publish/migrations/' => database_path('migrations'),
	// ]);

	// $this->publishes([
		// __DIR__ . '/../publish/Model/' => app_path(),
	// ]);

    $this->publishes([
        __DIR__ . '/../publish/Controllers/' => app_path('Http/Controllers'),
    ]);

    $this->publishes([
        __DIR__ . '/../publish/resources/' => base_path('resources'),
    ]);
	
	$this->publishes([
		__DIR__ . '/../publish/config/crudgenerator.php' => config_path('crudgenerator.php'),
	]);
	  
	  
	if (\App::VERSION() <= '5.2') {
		$this->publishes([
			__DIR__ . '/../publish/css/app.css' => public_path('css/app.css'),
		]);
	}

	$this->publishes([
		__DIR__ . '/stubs/' => base_path('resources/crud-generator/'),
	]);

    // $menus = [];
    // if (File::exists(base_path('resources/views/vendors/checkmate/admin/menus.json'))) {
    //     $menus = json_decode(File::get(base_path('resources/views/vendors/checkmate/admin/menus.json')));
    //     view()->share('laravelAdminMenus', $menus);
    // }
	  
    // $this->publishes([
    //     __DIR__ . '/../publish/resources/views' => base_path('resources/views/vendor/checkmate'),
    // ], 'views');

    // $this->loadViewsFrom(__DIR__ . '/views', 'checkmate');

    $menus = [];
    if (File::exists(base_path('resources/views/admin/menus.json'))) {
        $menus = json_decode(File::get(base_path('resources/views/admin/menus.json')));
        view()->share('laravelAdminMenus', $menus);
    }
	  
    // $this->publishes([
    //     __DIR__ . '/../publish/resources/views' => base_path('resources/views/vendor/checkmate'),
    // ], 'views');

    // $this->loadViewsFrom(__DIR__ . '/views', 'checkmate');



  }

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
    $this->commands(
      'Fishmad\Checkmate\InstallCommand',
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

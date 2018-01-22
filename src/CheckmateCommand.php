<?php

namespace Fishmad\Checkmate;

use File;
use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class CheckmateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'checkmate:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Checkmate.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        try {
            $this->call('migrate');
        } catch (\Illuminate\Database\QueryException $e) {
            $this->error($e->getMessage());
            exit();
        }

        if (\App::VERSION() >= '5.2') {
            $this->info("Generating the authentication scaffolding");
            $this->call('make:auth');
        }

        $this->info("Publishing the assets");
        //$this->call('vendor:publish', ['--provider' => 'Appzcoder\CrudGenerator\CrudGeneratorServiceProvider', '--force' => true]);
        $this->call('vendor:publish', ['--provider' => 'Fishmad\Checkmate\CheckmateServiceProvider', '--force' => true]);

        $this->info("Dumping the composer autoload");
        (new Process('composer dump-autoload'))->run();

        $this->info("Migrating the database tables into your application");
        $this->call('migrate');

        $this->info("Adding the routes");

        $routeFile = app_path('Http/routes.php');
        if (\App::VERSION() >= '5.3') {
            $routeFile = base_path('routes/web.php');
        }

        $routes =
            <<<EOD
Route::get('admin', 'Admin\\AdminController@index');
Route::resource('admin/roles', 'Admin\\RolesController');
Route::resource('admin/permissions', 'Admin\\PermissionsController');
Route::resource('admin/users', 'Admin\\UsersController');
Route::resource('admin/samples', 'Admin\SamplesController');
Route::get('admin/generator', ['uses' => '\Fishmad\Checkmate\Controllers\ProcessController@getGenerator']);
Route::post('admin/generator', ['uses' => '\Fishmad\Checkmate\Controllers\ProcessController@postGenerator']);
EOD;

        File::append($routeFile, "\n" . $routes);

        $this->info("Overriding the AuthServiceProvider");
        $contents = File::get(__DIR__ . '/../publish/Providers/AuthServiceProvider.php');
        File::put(app_path('Providers/AuthServiceProvider.php'), $contents);

        $this->info("Successfully installed Checkmate!");
    }
}

<?php

namespace Fishmad\Dashboard;

use File;
use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class DashboardCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dashboard:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the Dashboard.';

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

        if (\App::VERSION() >= '5.3') {
            $this->info("Generating the authentication scaffolding");
            $this->call('make:auth');
        }

        $this->info("Publishing the assets");
        $this->call('vendor:publish', ['--provider' => 'Appzcoder\CrudGenerator\CrudGeneratorServiceProvider', '--force' => true]);
        $this->call('vendor:publish', ['--provider' => 'Fishmad\Dashboard\DashboardServiceProvider', '--force' => true]);

        $this->info("Dumping the composer autoload");
        (new Process('composer dump-autoload'))->run();

        $this->info("Migrating the database tables into your application");
        $this->call('migrate');

        $this->info("Adding the routes");

        $routeFile = app_path('Http/routes.php');
        if (\App::VERSION() >= '5.3') {
            $routeFile = base_path('routes/web.php');
        }a

        $routes =
            <<<EOD
Route::get('admin', 'Admin\\AdminController@index');
Route::get('admin/generator', ['uses' => '\Fishmad\Dashboard\Controllers\ProcessController@getGenerator']);
Route::post('admin/generator', ['uses' => '\Fishmad\Dashboard\Controllers\ProcessController@postGenerator']);
EOD;

        File::append($routeFile, "\n" . $routes);

        $this->info("Successfully installed Laravel Admin!");
    }
}

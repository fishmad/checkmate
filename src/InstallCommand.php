<?php

namespace Fishmad\Checkmate;

use File;
use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class InstallCommand extends Command
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
    protected $description = 'Install the Checkmate Dashboard & Crudmin.';

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

//        if (\App::VERSION() >= '5.3') {
//            $this->info("Generating the authentication scaffolding");
//            $this->call('make:auth');
//        }

        $this->info("-- Publish Admin items:");
        $this->call('vendor:publish', ['--provider' => 'Fishmad\Checkmate\CheckmateServiceProvider', '--force' => true]);

        // $this->info("-- Publish CRUD Generators:");
        // $this->call('vendor:publish', ['--provider' => 'Fishmad\Checkmate\CrudGeneratorServiceProvider', '--force' => true]);

        $this->info("-- Dump composer autoload");
        (new Process('composer dump-autoload'))->run();

        $this->info("-- Migrating the database tables into your application");
        $this->call('migrate');

        $this->info("-- Append Checkmate routes to Laravel 'routes/web.php' file");

        $routeFile = app_path('Http/routes.php');
        if (\App::VERSION() >= '5.3') {
            $routeFile = base_path('routes/web.php');
        }

        $routes =
            <<<EOD
Route::get('admin', 'Admin\\AdminController@index');
Route::get('admin/generator', ['uses' => '\Fishmad\Checkmate\Controllers\ProcessController@getGenerator']);
Route::post('admin/generator', ['uses' => '\Fishmad\Checkmate\Controllers\ProcessController@postGenerator']);
EOD;

        File::append($routeFile, "\n" . $routes);
        $this->info("routes added succesfully.");

        $this->info("Successfully installed Fishmad Checkmate!");
        $this->info(" ");
        $this->info("Login email: admin@mail.com");
        $this->info("Password: password");
        $this->info(" ");
        $this->info("Please vist: https://localhost/yourapp/admin");


    }
}

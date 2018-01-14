## Installation

To get started, you should add the `Fishmad/dashboard` Composer dependency to your project:
```
composer require Fishmad/dashboard --dev
```
Once the package is installed, you should register the `Fishmad\Dashboard\CrudGeneratorServiceProvider` service provider. Normally, Laravel 5.5+ will register the service provider automatically.

After that, publish its assets using the `vendor:publish` Artisan command:
```
php artisan vendor:publish --provider="Fishmad\Dashboard\CrudGeneratorServiceProvider"
```
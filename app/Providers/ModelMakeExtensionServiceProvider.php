<?php

namespace App\Providers;

use App\Console\Commands\ModelMakeCommand;
use Illuminate\Support\ServiceProvider;

class ModelMakeExtensionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->extend('command.model.make', function ($command, $app) {
            return new ModelMakeCommand($app['files']);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

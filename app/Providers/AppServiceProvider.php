<?php

namespace App\Providers;

use App\Database\Connections\jsonConnections;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->resolving('db', function ($db){
            $db->extend('json',function ($config , $name){
                return new jsonConnections($config);
            });
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}

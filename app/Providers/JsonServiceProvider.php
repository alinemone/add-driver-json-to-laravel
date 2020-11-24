<?php

namespace App\Providers;

use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class JsonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       Model::setConnectionResolver($this->app['db']);


    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Add database driver.
        $this->app->resolving('db', function ($db) {


            $db->extend('json', function ($config, $name) {

                $config['driver'] = $name;
//                dd($config);
                return new Connection($config);
            });
        });


    }


}

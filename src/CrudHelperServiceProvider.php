<?php

namespace Bagaaz\LaravelCrudHelper;

use Illuminate\Support\ServiceProvider;

class CrudHelperServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-crud-helper');
    }

    public function register()
    {
        //
    }
}

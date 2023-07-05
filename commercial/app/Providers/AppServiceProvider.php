<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
        //$this->app->bind('qty', function ($app) {
    //return 1;
    }

    
     // Bootstrap any application services.
     
     public function boot(): void
    {
        //
    }
};

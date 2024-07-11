<?php

namespace App\Providers;

use App\Man;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(Man::class,fn()=>new Man(2));
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       
    }
}

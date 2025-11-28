<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Setting;
use App\Models\Services;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
         view()->composer('*', function($view){
            $view->with('settings', Setting::latest()->first());
            $view->with('site_services', Services::latest()->get());
            });
    }
}

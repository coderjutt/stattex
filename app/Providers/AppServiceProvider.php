<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Services;
use Illuminate\Support\Facades\View;
 
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
        View::composer('frontend.layout.footer', function ($view) {
        $services = Services::limit(5)->get(); // limit or filter as needed
        $view->with('services', $services);
    });
    }
}

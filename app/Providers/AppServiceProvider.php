<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\URL;
use App\Http\Middleware\RedirectIfAuthenticatedAdmin;
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
     public function boot(Router $router)
    {
       
    if (app()->environment('production')) {
        \Illuminate\Support\Facades\URL::forceScheme('https');
    }

    $router->aliasMiddleware('guest.admin', RedirectIfAuthenticatedAdmin::class);
    }
}

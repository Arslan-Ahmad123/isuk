<?php

namespace App\Providers;

use App\Services\BreadcrumbService;
use Illuminate\Support\ServiceProvider;

class BreadcrumbServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(BreadcrumbService::class, function ($app) {
            return new BreadcrumbService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

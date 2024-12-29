<?php

namespace App\Providers;

use App\Models\Sanctum\PersonalAccessToken;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Sanctum::getAccessTokenFromRequestUsing(
            function ($request) {
                return $request->token;
            }
        );
        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);
        Schema::defaultStringLength(191);

        // Add the custom Blade directive

        Blade::directive('disableViewEmployee', function () {
            return "<?php echo request()->routeIs('view-employee') ? 'disabled style=\"pointer-events: none; opacity: 1;\"' : ''; ?>";
        });
        Blade::directive('disableViewTraining', function () {
            return "<?php echo request()->routeIs('view-training') ? 'disabled style=\"pointer-events: none; opacity: 1;\"' : ''; ?>";
        });
    }
}

<?php

namespace App\Providers;

use illuminate\Cache\RateLimiting\Limit;
use illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public const HOME   =   '/dashboard';
    public function register(): void {}

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->configureRateLimiting();
        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));
            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }
    protected function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            // return Limit::perMinute(60)->by($request->user()->id ?: $request->id());
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}

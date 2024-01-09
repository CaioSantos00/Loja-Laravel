<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{RateLimiter,Route};

class RouteServiceProvider extends ServiceProvider
{    
    public const HOME = '/produtos';
    private function padroesDeUrl(){        
        //todo URL onde aparecer esse id,
        //só vai identificar se o "id" for uma string numerica :)
        Route::pattern('id','[0-9]+');
    }
    public function boot(): void{
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
        $this->padroesDeUrl();
        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }
}

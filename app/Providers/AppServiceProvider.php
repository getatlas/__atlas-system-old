<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Blade::directive('has', function ($expression) {
            return "<?php if(!empty(trim(\$__env->yieldContent{$expression}))): ?>";
        });

        Blade::directive('set', function($expression) {
            return "<?php {$expression}; ?>";
        });
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }
}

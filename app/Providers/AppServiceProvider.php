<?php

namespace App\Providers;

use App\Models\Question;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

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
        Blade::withoutDoubleEncoding();
        Route::bind('slug', function($slug){
            return Question::where('slug', $slug)->first() ?? abort(404);
        });
    }
}

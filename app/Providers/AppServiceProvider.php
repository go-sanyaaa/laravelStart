<?php

namespace App\Providers;

use App\Http\Controllers\TestController;
use App\Services\TestBasicService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TestController::class, function() {
            return new TestController(new TestBasicService());
        });

        $this->app->alias(TestController::class,'controller.test');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

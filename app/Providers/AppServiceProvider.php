<?php

namespace App\Providers;

use App\Http\Controllers\TestController;
use App\Services\TestBasicService;
use App\TestOne;
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
        $this->app->bind(TestBasicService::class, function() {
            $testOne = new TestOne();
            return new TestBasicService($testOne);
        });

        $this->app->alias(TestBasicService::class,'service.test_basic');
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

<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static getTestOneParams()
 * @method static setTestOne(int $age, string $name, bool $male)
 * @see \App\Services\TestBasicService
 */
class TestBasicServiceFacade extends Facade {
    protected static function getFacadeAccessor() {
        return 'service.test_basic';  // алиас из сервис-провайдера
    }
}
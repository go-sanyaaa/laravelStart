<?php

namespace Tests\Feature;

use App\Facades\TestBasicServiceFacade;
use App\Services\TestBasicService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestBasicServiceTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetForMock()
    {
        $this->mock(TestBasicService::class, function($mock) {
            $mock->shouldReceive('getForMock')->once()->andReturn("my third test");

            $result = $mock->getForMock(234);

            $this->assertEquals($result, "my third test");
        });
    }

    public function testFacade() {
        TestBasicServiceFacade::shouldReceive('getForMock')->once()->andReturn("my third test");

        $result = TestBasicServiceFacade::getForMock(234);

        $this->assertEquals($result, "my third test");
    }
}

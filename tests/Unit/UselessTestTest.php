<?php

namespace Tests\Unit;

use App\UselessTest;
use Tests\TestCase;

class UselessTestTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $uselessTests = factory(UselessTest::class, 3)->create();

        $lastUselessTests = UselessTest::latest()->take(3)->get();

        $this->assertEquals($uselessTests->toArray(),$lastUselessTests->toArray());
    }
}

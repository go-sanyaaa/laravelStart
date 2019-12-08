<?php

namespace App\Http\Controllers;

use App\Services\TestBasicService;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private $test;

    public function getOne() {
        $this->test = TestBasicService::create();

        return response()->json($this->test->getParams());
    }

    public function setOne(Request $request) {
        $requestBody = json_decode($request->getContent());
        $name = $requestBody->name ?? 'Man';
        $age = $requestBody->age ?? 18;
        $male = $requestBody->male ?? true;

        $this->test = TestBasicService::create($name, $age, $male);

        return response()->json($this->test->getValues());
    }
}

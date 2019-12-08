<?php

namespace App\Http\Controllers;

use App\Services\TestBasicService;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getOne() {
        $test = new TestBasicService();

        return response()->json($test->getParams());
    }

    public function setOne(Request $request) {
        $requestBody = json_decode($request->getContent());

        $test = new TestBasicService();

        $test->setName($requestBody->name ?? 'Man');
        $test->setAge($requestBody->age ?? 18);
        $test->setMale($requestBody->male ?? true);

        return response()->json($test->getValues());
    }
}

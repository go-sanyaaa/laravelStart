<?php

namespace App\Http\Controllers;

use App\Services\TestBasicService;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private $testBasicService;

    public function __construct(TestBasicService $testBasicService) {
        $this->testBasicService = $testBasicService;
    }

    public function getOne() {
        return response()->json($this->testBasicService->getTestOneParams());
    }

    public function setOne(Request $request) {
        $requestBody = json_decode($request->getContent());

        $age = $requestBody->age ?? 18;
        $name = $requestBody->name ?? 'Man';
        $male = $requestBody->male ?? true;

        $response = $this->testBasicService->setTestOne($age, $name, $male);

        return response()->json($response);
    }
}

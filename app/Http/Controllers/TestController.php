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
        return response()->json($this->testBasicService->getParams());
    }

    public function setOne(Request $request) {
        $requestBody = json_decode($request->getContent());

        $this->testBasicService->setAge($requestBody->age ?? 18);
        $this->testBasicService->setName($requestBody->name ?? 'Man');
        $this->testBasicService->setMale($requestBody->male ?? true);


        return response()->json($this->testBasicService->getValues());
    }
}

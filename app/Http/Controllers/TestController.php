<?php

namespace App\Http\Controllers;

use App\Services\TestBasicService;
use Illuminate\Http\Request;
use App\Facades\TestBasicServiceFacade;

class TestController extends Controller
{
    public function getOne() {
        return response()->json(TestBasicServiceFacade::getTestOneParams());
    }

    public function setOne(Request $request) {
        $requestBody = json_decode($request->getContent());

        $age = $requestBody->age ?? 18;
        $name = $requestBody->name ?? 'Man';
        $male = $requestBody->male ?? true;

        $response = TestBasicServiceFacade::setTestOne($age, $name, $male);

        return response()->json($response);
    }
}

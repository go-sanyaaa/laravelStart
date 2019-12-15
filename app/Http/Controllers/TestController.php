<?php

namespace App\Http\Controllers;

use App\Services\TestBasicService;
use Illuminate\Http\Request;
use App\Facades\TestBasicServiceFacade;
use App\Test;

class TestController extends Controller
{
    public function get($id) {
        return response()->json(Test::getById($id));
    }

    public function getOne() {
        return response()->json(TestBasicServiceFacade::getTestOneParams());
    }

    public function search(Request $request) {
        return Test::searchByText($request->text);
    }

    public function test() {
        return response('my first test',200);
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

<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class TestOne {
    private $age = 22;
    private $name = 'Alexander';
    private $male = true;

    public function getParams() {
        $array = [];
        foreach ($this as $key => $value) {
            $array[$key] = gettype($value);
        }
        return $array;
    }

    public function getValues() {
        $array = [];
        foreach ($this as $key => $value) {
            $array[$key] = $value;
        }
        return $array;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setMale($male) {
        $this->male = $male;
    }
}

class TestController extends Controller
{
    public function getOne() {
        $test = new TestOne();

        return response()->json($test->getParams());
    }

    public function setOne(Request $request) {
        $requestBody = json_decode($request->getContent());

        $test = new TestOne();

        $test->setName($requestBody->name ?? 'Man');
        $test->setAge($requestBody->age ?? 18);
        $test->setMale($requestBody->male ?? true);

        return response()->json($test->getValues());
    }
}

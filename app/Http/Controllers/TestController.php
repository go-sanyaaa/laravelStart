<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestOne {
    private $age = 22;
    private $name = 'Alexander';
    private $male = true;

    public function getParams() {
        $array = [];
        foreach ($this as $key => $value) {
            array_unshift($array, [$key => $value]);
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

        dd($test->getParams());
    }
}

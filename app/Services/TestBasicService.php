<?php

namespace App\Services;

class TestBasicService {
    private $age = 22;
    private $name = 'Alexander';
    private $male = true;

    public function __construct($name, $age, $male){
        $this->age = $age;
        $this->name = $name;
        $this->male = $male;
    }

    public static function create($name = 'Alex', $age = 18, $male = true) {
        return new TestBasicService($name, $age, $male);
    }

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
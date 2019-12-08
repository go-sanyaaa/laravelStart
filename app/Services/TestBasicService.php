<?php

namespace App\Services;

class TestBasicService {
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
<?php

namespace App\Services;

use App\TestOne;

class TestBasicService {
    private $testOne;

    public function __construct(TestOne $testOne){
        $this->testOne = $testOne;
    }

    public function getTestOneParams() {
        return $this->testOne->getParams();
    }

    public function setTestOne($age, $name, $male) {
        $this->testOne->setName($name);
        $this->testOne->setAge($age);
        $this->testOne->setMale($male);

        return $this->testOne->getValues();
    }
}
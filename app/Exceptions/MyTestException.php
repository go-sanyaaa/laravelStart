<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Support\Facades\Log;

class MyTestException extends Exception
{
    public function report() {
        Log::info("MyTestException");
    }

    public function render() {
        return response()->json(['error' => 'MyTestException']);
    }
}

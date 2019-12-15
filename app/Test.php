<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['text','is_enabled'];
    protected $casts = [
        'is_enabled' => 'boolean'
    ];

    public static function getAndUpdateMaxId() {
        $test = Test::latest('id')->first();
        $replicate = clone $test;

        $test->text = 'So what about pepito?';
        $test->is_enabled = 1;
        $test->save();

        return $replicate;
    }

    public static function getById($id){
        return Test::find($id);
    }

    public static function searchByText($text) {
        $result = Test::where('text','like',"%{$text}%")->get();
        return $result->count() ? $result : null;
    }
}

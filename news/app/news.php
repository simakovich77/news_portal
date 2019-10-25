<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    //
    public static function getAllNews() {
        $a = static::all();
        return static::all();
    }
}

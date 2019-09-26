<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    //
    public static function getAllNews() {
        return static::all();
    }
}

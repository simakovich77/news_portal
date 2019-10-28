<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class news extends Model
{
    //
    public static function getAllNews() {


        $lastnews = DB::table('news')
            ->latest()
            ->limit(3)
            ->first();
        return $lastnews;
//        $a = static::all();
//        return static::all();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class news extends Model
{
    //
    public static function getAllNews() {

        //return $this->belongsTo('App\User');

//        $lastnews = DB::table('news')
//            ->latest()
//            ->limit(3)
//            ->get();
//        return $lastnews;
        return static::all();
    }
}

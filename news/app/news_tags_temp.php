<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news_tags_temp extends Model
{
    //
    public static function getAllTags() {
        return static::all();
    }

}

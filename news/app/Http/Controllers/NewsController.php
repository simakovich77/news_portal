<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    function index() {
//        $news = App\news::GetAllNews();
//        print("<pre>");
//        print_r($news);
//        print("</pre>");


        $news_tags_temp = App\news_tags_temp::getAllTags();
        print("<pre>");
        print_r($news_tags_temp);
        print("</pre>");




        return view('pages.home', compact('news'));
    }
}

<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    function index() {
        echo '1';
        $news = App\news::GetAllNews();
        return view('pages.home', compact('news'));
    }
}

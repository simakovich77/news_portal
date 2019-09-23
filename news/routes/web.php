<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $news = DB:table('')->get();
    return view('pages.home', compact('tasks'));
});

Route::get('hello', function () {
    $name = 'Jack';
    $tasks = [
        'add task',
        'find task',
        'review task',
    ];
    return view('hello', compact('tasks'), compact('name')
    );
});
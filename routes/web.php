<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/test', function () {
    $posts = [
        ['id'=>'1','title'=>'Learn PHP','posted_by'=>'Ahmed'],
        ['id'=>'2','title'=>'Solid principles','posted_by'=>'Muhammad'],
        ['id'=>'3','title'=>'design patterns','posted_by'=>'Omar']
    ];
    return view('test', compact('posts'));
});


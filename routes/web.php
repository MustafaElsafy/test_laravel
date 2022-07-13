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
    $posts = array
    (
        ['id' => 1, 'title' => 'Php', 'posted_by' => 'Mustafa'],
        ['id' => 2, 'title' => 'Java', 'posted_by' => 'Ali'],
        ['id' => 3, 'title' => 'Python', 'posted_by' => 'Ahmed'],
    );
    return view('test',compact('posts'));
});

Route::get('test2',[\App\Http\Controllers\TestController::class,'testAction']);

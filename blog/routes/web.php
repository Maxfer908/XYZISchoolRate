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
    return view('welcome');
});

Route::get('/hello', function () {
    return "hello world!";
});
Route::get('/page', function () {
    return view('mypage');
});
Route::get('/page1', 'StaticPagesController@showPageOne');
Route::get('/page2', 'StaticPagesController@showPageTwo');
Route::get('/page3', 'StaticPagesController@showPageThree');
?>

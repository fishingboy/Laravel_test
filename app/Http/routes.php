<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route 測試開始
Route::get('/test', function () {
    return "test!!";
});

/***************************
 * 測試基本的 view
 ***************************/
Route::get('/test_view', function () {
    return view('test.1');
});

Route::get('/test_view2', function () {
    return view('test.2');
});

// view 帶參數
Route::get('/test_view3', function () {
    return view('test.3', ['name' => 'Leo']);
});

// view 帶參數(blade 模版)
Route::get('/test_view4', function () {
    return view('test.4', ['name' => 'Leo']);
});

/***************************
 * 測試基本的 Controller
 ***************************/
Route::get('/c/{id}', 'TestController@index');
Route::get('/c/index/{id}', 'TestController@index');
Route::get('/c/v/{id}', 'TestController@view');

/***************************
 * 測試基本的資料庫存取
 ***************************/
Route::get('/d', 'DBtestController@index');
Route::get('/d/id/{id}', 'DBtestController@test1');
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
Route::get('/qiushenlin/{data?}', function ($data=null) {
    return view('qiushenlin',['data' => $data]);
    #路由传入的一定要是数组
})->where('data', '[0-9]+');
#正则限制
Route::get('/数据库/{id?}','mysql');


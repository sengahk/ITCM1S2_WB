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

//Route::get('/home2',function(){
//
//    return view('school.h_work_2');
//
//});
Route::get('/', function () {
    return view('welcome');
});


Route::get('/home1','myController@home1');
Route::get('/home2','myController@home2');
Route::get('/home3','myController@home3');

Route::resource('posts','PostsController');

//Route::get('/home2',function(){
//    return view('school.h_work_2');
//});


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

Route::get('hello', function () {
    return view('Hello');
});

//hello�R���g���[���[�ւ̃��[�e�B���O
Route::get('/hello','HelloController@index');
Route::post('/hello','HelloController@index');
//�R���g���[���[���g�킸�A����View�փ��[�e�B���O����
Route::view('/form','form');
        
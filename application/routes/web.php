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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('refund.home');
});

Route::get('/create-refund', 'RefundController@index');
Route::post('/create-refund', 'RefundController@createRefundRequest');

Route::get('/refund-list', 'RefundController@allRefunds');
//Route::post('/refund-list', 'RefundController@createRefundRequest');

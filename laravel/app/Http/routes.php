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

Route::get('/phone', function () {
    dd(app()->make('Smartphone'));
});

Route::get('/shorten', function (){
    return Response::view('shorten', ['link' => Bitly::shorten('http://football.ua')['data']['url']]);
});
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('register','Api\UserController@register');
Route::post('login','Api\UserController@login');
Route::post('update','Api\UserController@update');
Route::get('logout','Api\UserController@logout');
Route::post('user','Api\UserController@getCurrentUser');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

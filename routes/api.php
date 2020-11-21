<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('subscribe/{id}', 'CourseController@subscribe')->middleware('auth:api');

Route::apiResource('message','MessageController')->middleware('auth:api');

<?php

use Illuminate\Http\Request;

Route::group(['prefix' => 'v1', 'middleware' => 'auth:api', 'namespace' => 'Api', 'as' => 'api.'], function () {
    Route::get('me', function (Request $request) {
        return $request->user();
    });
    Route::apiResources(['/users' => 'UsersController']);
});
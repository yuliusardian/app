<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1'], function () {
    Route::get('/', function () {
        return response(app()->version(), 200);
    });

    Route::group(['prefix' => 'auth'], function () {
        Route::post('register', 'Api\v1\AuthenticatedController@register');
        Route::post('login', 'Api\v1\AuthenticatedController@login');
    });

    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::group(['prefix' => 'auth'], function () {
            Route::get('logout', 'Api\v1\AuthenticatedController@logout');
        });

        Route::group(['prefix' => 'member'], function () {
            Route::get('detail', function () {
                return response('detail', 200);
            });
            Route::post('update', function () {
                return response('update', 200);
            });
        });

        Route::group(['prefix' => 'interaction'], function () {
            Route::get('/', function () {
                return Response('Test', 201);
            });

            Route::post('favourite', function () {
                return Response('favourite', 201);
            })->name('interaction.favourite');
        });

    });

});

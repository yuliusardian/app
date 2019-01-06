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

        Route::group(['prefix' => 'album'], function () {
            Route::get('newest', 'Api\v1\AlbumController@newest');
        });

        Route::group(['prefix' => 'artist'], function () {
            Route::get('newest', 'Api\v1\ArtistController@newest');
        });

        Route::group(['prefix' => 'genre'], function () {
            Route::get('newest', 'Api\v1\GenreController@newest');
        });

        Route::group(['prefix' => 'toptrack'], function () {
            Route::get('top', 'Api\v1\TopTrackController@top');
        });

        Route::group(['prefix' => 'favourite'], function () {
            Route::get('/', 'Api\v1\FavouriteController@index');
        });

    });

});

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
    return response()->redirectTo('login');
});

//Auth::routes();

$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// comment the default and changed to RegisterCustomController;
//$this->post('register', 'Auth\RegisterController@register');
$this->post('register', 'Auth\RegisterCustomController@register');

$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('/home', 'HomeController@index')->name('home');

/**
 * need auth
 */
Route::group(['middleware' => ['auth', 'view.variable']], function () {
    Route::get('profile', 'Web\ProfileController@index')->name('profile');
    Route::post('profile', 'Web\ProfileController@update');

    Route::get('artist', 'Web\ArtistController@index')->name('artist');

    Route::get('genre', 'Web\GenreController@index')->name('genre');

    Route::get('album', 'Web\AlbumController@index')->name('album');

    Route::get('toptrack', 'Web\TopTrackController@index')->name('toptrack');

    Route::get('favourite', 'Web\FavouriteController@index')->name('favourite');

    Route::get('history', 'Web\HistoryController@index')->name('history');

    Route::group(['prefix' => 'interaction'], function () {
        Route::get('/', function () {
            return Response('Test', 201);
        });

        Route::post('favourite/{song_id?}', 'Web\InteractionController@favourite')->name('web.interaction.favourite');
        Route::post('queue/{song_id?}', 'Web\InteractionController@queue')->name('web.interaction.queue');
        Route::post('play/{song_id?}', 'Web\InteractionController@play')->name('web.interaction.play');
        Route::post('search', 'Web\InteractionController@search')->name('web.interaction.search');
    });
});

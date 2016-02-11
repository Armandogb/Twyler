<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('twitter/error', ['as' => 'twitter.error', function(){
    // Something went wrong, add your own error handling here
}]);

Route::get('twitter/logout', ['as' => 'twitter.logout', function(){
    Session::forget('access_token');
    return Redirect::to('/')->with('flash_notice', 'You\'ve successfully logged out!');
}]);




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => ['web']], function () {
    Route::get('/login', 'TwitUserController@login')->name('user.login');
    Route::get('/user/verify','TwitUserController@verify')->name('twitter.login');
    Route::get('/verify/callback','TwitUserController@callback')->name('twitter.callback');
});

Route::group(['middleware' => ['web-check']], function () {
    Route::get('/', function () {return view('home');});

Route::get('/test', function () {
    return Twitter::getUserTimeline(['screen_name' => 'ClinntBeastwood', 'count' => 20, 'format' => 'json']);
});
});

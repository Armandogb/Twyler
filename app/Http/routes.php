<?php


Route::group(['middleware' => ['web']], function () {
    Route::get('/login', 'TwitUserController@login')->name('user.login');
    Route::get('/user/verify','TwitUserController@verify')->name('twitter.login');
    Route::get('/verify/callback','TwitUserController@callback')->name('twitter.callback');
    Route::get('/', 'MainPageController@welcome')->name('app.landing');
});

Route::group(['middleware' => ['web-check']], function () {
	Route::get('/logout', 'TwitUserController@logout')->name('user.logout');
	Route::get('/home', 'MainPageController@home')->name('app.home');
	Route::get('/make/twyl', 'MainPageController@twyl')->name('app.twyl');

	Route::get('/test', function () {
    return Twitter::getHomeTimeline(['count' => 30, 'format' => 'json']);
	});

});

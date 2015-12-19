<?php

Route::get('/', 'pageController@home');

Route::get('feed', 'pageController@feeds');

Route::get('profil','pageController@profil');

Route::post('login', 'pageController@login');

Route::get('logout', 'pageController@logout');

Route::get('cerita/{id}', 'pageController@cerita');

Route::get('user/update', 'pageController@update');

Route::resource('user', 'userController');

Route::resource('tulis', 'ceritaController');

<?php

Route::get('/', function () {
    return view('homepage');
});

Route::get('/feed', 'ceritaController@feeds');

Route::get('/profil', function()
{
   $user = Auth::user();
   $feeds = App\Cerita::all();
   if(isset($user) && isset($feeds))
   {
      return view('profil')->with('user', $user)->with('feeds', $feeds);
   }
   else
   {
      return view('profil');
   }
});

Route::post('login', 'userController@login');

Route::get('/logout', function () {
    Auth::logout();
    return "logged out";
});

Route::resource('/buatUser', 'userController');

Route::resource('/tulisBaru', 'ceritaController');

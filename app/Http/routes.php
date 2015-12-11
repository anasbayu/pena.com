<?php

Route::get('/', function () {
    return view('homepage');
});

Route::get('/dashboard', function(){
   return view('dashboard');
});

Route::get('/tulis cerita baru', 'TulisController@buatBaru');

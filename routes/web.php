<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
Route::get('/','HomeController@home_inicio')->name('home_inicio');


/*verificamos que se este conectando a la base de datos de forma correcta*/
Route::get('/test-query', function () {
    $users = DB::select('SELECT * FROM users');
    return $users;
});

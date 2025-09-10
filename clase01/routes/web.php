<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home']);

Route::get('/quienes-somos', [\App\Http\Controllers\AboutController::class, 'about']);

Route::get('peliculas/listado', [\App\Http\Controllers\MoviesController::class, 'index']);

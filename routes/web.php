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
        Route::view('/', 'home')->name('home');

        Route::view('/informate', 'informate')->name('informate');

        Route::view('/quienesSomos', 'quienesSomos')->name('quienesSomos');

        Route::view('/ambiental', 'ambiental')->name('ambiental');

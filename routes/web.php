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
        Route::view('/', 'home1')->name('home1');

        Route::view('/informate', 'informate')->name('informate');

        Route::view('/quienesSomos', 'quienesSomos')->name('quienesSomos');

        Route::view('/ambiental', 'ambiental')->name('ambiental');

        Route::view('/social', 'social')->name('social');

        Route::view('/pro_civil', 'pro_civil')->name('pro_civil');

        Route::view('/socio_sanitario', 'socio_sanitario')->name('socio_sanitario');

        Route::view('/comunitario', 'comunitario')->name('comunitario');

        Route::view('/educativo', 'educativo')->name('educativo');

        Route::view('/sub_menu1', 'sub_menu1')->name('sub_menu1');

        Route::view('/sub_menu2', 'sub_menu2')->name('sub_menu2');

        Route::view('/sub_menu3', 'sub_menu3')->name('sub_menu3');

        Route::view('/sub_menu4', 'sub_menu4')->name('sub_menu4');

        Route::view('/sub_menu5', 'sub_menu5')->name('sub_menu5');

        Route::view('/sub_menu6', 'sub_menu6')->name('sub_menu6');

        Route::view('/p_web1', 'p_web1')->name('p_web1');

        Route::view('/p_web2', 'p_web2')->name('p_web2');

        Route::view('/p_web3', 'p_web3')->name('p_web3');

        Route::view('/p_web4', 'p_web4')->name('p_web4');

        Route::view('/p_web5', 'p_web5')->name('p_web5');

        Route::view('/p_web6', 'p_web6')->name('p_web6');
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home1');

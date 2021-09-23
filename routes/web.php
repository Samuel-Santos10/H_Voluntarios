<?php
use Illuminate\Support\Facades\Route;


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

        Auth::routes();

        Route::apiResources([
                'empresas'=>EmpresasController::class,
                
        ]);

        Route::view('/', 'home1')->name('home1');

        Route::view('/informate', 'informate')->name('informate');

        Route::view('/quienesSomos', 'quienesSomos')->name('quienesSomos');

        Route::view('/ambiental', 'ambiental')->name('ambiental');

        Route::view('/social', 'social')->name('social');

        Route::view('/pro_civil', 'pro_civil')->name('pro_civil');

        Route::view('/socio_sanitario', 'socio_sanitario')->name('socio_sanitario');

        Route::view('/comunitario', 'comunitario')->name('comunitario');

        Route::view('/educativo', 'educativo')->name('educativo');

        Route::view('/evaluacion_ambiental', 'evaluacion_ambiental')->name('evaluacion_ambiental');

        Route::view('/evaluacion_educativo', 'evaluacion_educativo')->name('evaluacion_educativo');

        Route::view('/evaluacion_social', 'evaluacion_social')->name('evaluacion_social');

        Route::view('/evaluacion_civil', 'evaluacion_civil')->name('evaluacion_civil');

        Route::view('/evaluacion_comunitario', 'evaluacion_comunitario')->name('evaluacion_comunitario');

        Route::view('/evaluacion_sanitario', 'evaluacion_sanitario')->name('evaluacion_sanitario');

        Route::view('/p_web1', 'p_web1')->name('p_web1');

        Route::view('/p_web2', 'p_web2')->name('p_web2');

        Route::view('/p_web3', 'p_web3')->name('p_web3');

        Route::view('/p_web4', 'p_web4')->name('p_web4');

        Route::view('/p_web5', 'p_web5')->name('p_web5');

        Route::view('/p_web6', 'p_web6')->name('p_web6');

        Route::view('/deberes', 'deberes')->name('deberes');

        Route::view('/layout_empresas', 'layout_empresas')->name('layout_empresas');

        Route::view('/layout_voluntarios', 'layout_voluntarios')->name('layout_voluntarios');

        Route::view('/terminos', 'terminos')->name('terminos');

        Route::view('/historias_voluntarios', 'historias_voluntarios')->name('historias_voluntarios');

        Route::view('/beneficios_ayudas', 'beneficios_ayudas')->name('beneficios_ayudas');
     
        Route::view('/ayuda', 'ayuda')->name('ayuda');

        Route::view('/tipos_voluntarios', 'tipos_voluntarios')->name('tipos_voluntarios');

        Route::view('/Empresa1', 'Empresa1')->name('Empresa1');

        Route::view('/Empresa2', 'Empresa2')->name('Empresa2');

        Route::view('/Empresa3', 'Empresa3')->name('Empresa3');

        Route::view('/Empresa4', 'Empresa4')->name('Empresa4');

        Route::view('/Empresa5', 'Empresa5')->name('Empresa5');

        Route::view('/Empresa6', 'Empresa6')->name('Empresa6');

        Route::view('/administracion_empresas', 'administracion_empresas')->name('administracion_empresas');

        Route::view('/publicar', 'publicar')->name('publicar');

        Route::view('/foro', 'foro')->name('foro');
        
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home1');

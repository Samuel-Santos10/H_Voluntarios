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

        Route::view('/layout_informate_contenidos', 'layout_informate_contenidos')->name('layout_informate_contenidos');

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

        Route::view('/index', 'index')->name('index');

        Route::view('/foro', 'foro')->name('foro');

        Route::resource('/mostrar',PublicacionController::class);

        Route::view('/layout_post', 'layout_post')->name('layout_post');

        Route::view('/Vforos', 'Vforos')->name('Vforos');

        Route::view('/layout_foros', 'layout_foros')->name('layout_foros');

        Route::view('/historias', 'historias')->name('historias');

        Route::view('/layout_historias', 'layout_historias')->name('layout_historias');
        
        Route::view('/preguntas', 'preguntas')->name('preguntas');

        Route::view('/ayuda', 'ayuda')->name('ayuda');

        Route::view('/layout_END', 'layout_END')->name('layout_END');

        Route::view('/pasos', 'pasos')->name('pasos');


        
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home1');

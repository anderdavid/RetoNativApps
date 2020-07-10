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

Route::get('/', 'EstudianteController@index');

/*Route::get('/child', function () {
    return view('child');
});*/

Route::get('/estudiantes', 'EstudianteController@index');
Route::get('/estudiantes/show', 'EstudianteController@index');
Route::get('/estudiantes/create', 'EstudianteController@create');
Route::post('/estudiantes/store', 'EstudianteController@store');
Route::get('/estudiantes/show/{id}', 'EstudianteController@show');
Route::get('/estudiantes/edit/{id}', 'EstudianteController@edit');
Route::post('/estudiantes/update/{id}', 'EstudianteController@update');
Route::get('/estudiantes/destroy/{id}', 'EstudianteController@destroy');

Route::get('/cursos', 'CursoController@index');
Route::get('/cursos/show', 'CursoController@index');
Route::get('/cursos/create', 'CursoController@create');
Route::post('/cursos/store', 'CursoController@store');
Route::get('/cursos/show/{id}', 'CursoController@show');
Route::get('/cursos/edit/{id}', 'CursoController@edit');
Route::post('/cursos/update/{id}', 'CursoController@update');
Route::get('/cursos/destroy/{id}', 'CursoController@destroy');

Route::get('/funciones/asignarCursos', 'FuncionController@asignarCursos');
Route::post('/funciones/store', 'FuncionController@store');
Route::get('/funciones/estudianteCurso/{id}', 'FuncionController@estudianteCurso');
Route::get('/funciones/top3', 'FuncionController@top3');








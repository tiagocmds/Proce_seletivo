<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');
ROUTE::resource('alunos', 'AlunoController');
ROUTE::resource('professors', 'ProfessorController');
ROUTE::resource('disciplinas', 'DisciplinaController');
ROUTE::resource('homes', 'HomeController');
ROUTE::resource('turmas', 'TurmaController');

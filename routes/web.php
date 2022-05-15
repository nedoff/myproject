<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoListController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/



Route::controller(TodolistController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/create', 'create')->name('create');
    Route::get('/delete/{id}', 'delete')->name('delete');
    Route::get('/done/{id?}', 'done')->name('done');;
    Route::get('/undone/{id?}', 'undone')->name('undone');;
});



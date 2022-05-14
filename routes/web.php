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


Route::get('/', [TodolistController::class, 'index'])->name('index');
Route::post('/create', [TodolistController::class, 'create'])->name('create');
Route::get('/delete/{id}', [TodolistController::class, 'delete'])->name('delete');
Route::get('/done/{id}', [TodolistController::class, 'done']);
Route::get('/undone/{id}', [TodolistController::class, 'undone']);

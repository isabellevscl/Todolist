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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todolist', [App\Http\Controllers\todolistController::class, 'create'])->name('home');
Route::post('/todolist', [App\Http\Controllers\todolistController::class, 'store'])->name('cadastrar_tarefa');
Route::get('/todolist/{id}', [App\Http\Controllers\todolistController::class, 'show']);
Route::get('/todolist/editar/{id}', [App\Http\Controllers\todolistController::class, 'edit']);
Route::post('/todolist/editar/{id}', [App\Http\Controllers\todolistController::class, 'update'])->name('alterar_tarefa');
Route::get('/todolist/deletar/{id}', [App\Http\Controllers\todolistController::class, 'delete']);
Route::post('/todolist/deletar/{id}', [App\Http\Controllers\todolistController::class, 'destroy'])->name('excluir_tarefa');
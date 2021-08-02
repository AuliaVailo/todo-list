<?php

use App\Http\Controllers\TodoController;
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
Route::get('/', function() {
    return redirect((route('home')));
});

Route::get('/todo', [TodoController::class, 'index'])->name('home');
Route::get('/todo/{id}', [TodoController::class, 'edit'])->name('edit');
Route::post('/todo/add', [TodoController::class, 'addTodo'])->name('add');
Route::post('/todo/update/{id}', [TodoController::class, 'updateTodo'])->name('update');
Route::get('/todo/delete/{id}', [TodoController::class, 'deleteTodo'])->name('delete');

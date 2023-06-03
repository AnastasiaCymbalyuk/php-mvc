<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo', [App\Http\Controllers\CtrlTodos::class, 'index']);

Route::get('/todo/create', [App\Http\Controllers\CtrlTodos::class, 'create']);

Route::post('/todo', [App\Http\Controllers\CtrlTodos::class, 'store']);

Route::get('/todo/{id}', [App\Http\Controllers\CtrlTodos::class, 'show']);
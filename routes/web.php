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

// Get all items
Route::get('/items', [
    \App\Http\Controllers\ItemController::class,
    "index"
])->name("items.index");

Route::post('/items', [
    \App\Http\Controllers\ItemController::class,
    "store"
])->name("items.store");

Route::get('/items/create', [
    \App\Http\Controllers\ItemController::class,
    "create"
])->name("items.create");

Route::get('/items/{id}', [
    \App\Http\Controllers\ItemController::class,
    "show"
])->name("items.show");

Route::post('/items/{id}', [
    \App\Http\Controllers\ItemController::class,
    "save"
])->name("items.save");

Route::delete('/items/{id}', [
    \App\Http\Controllers\ItemController::class,
    "destroy"
])->name("items.destroy");

Route::get('/items/{id}/edit', [
    \App\Http\Controllers\ItemController::class,
    "edit"
])->name("items.edit");


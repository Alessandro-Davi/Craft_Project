<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// CRUD

// LISTAR

Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');



// CREATE GET / STORE POST
Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');

// STORE

Route::post('/categoria/create', [CategoriaController::class, 'store'])->name('categoria.store');


// SHOW - GET
Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');

// EDIT
Route::get('/categoria/{id}/edit' , [CategoriaController::class, 'edit'])->name('categoria.edit');

// PUT

Route::put('/categoria/{id}/edit' , [CategoriaController::class, 'update'])->name('categoria.update');

// DELETE

Route::delete('/categoria/{id}' , [CategoriaController::class, 'destroy'])->name('categoria.destroy');

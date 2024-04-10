<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\BlogController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [BlogController::class, 'index'])->name('blog.index');

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


//POSTAGEM

// LISTAR

Route::get('/postagem', [PostagemController::class, 'index'])->name('postagem.index');

// CREATE GET / STORE POST
Route::get('/postagem/create', [PostagemController::class, 'create'])->name('postagem.create');

// STORE

Route::post('/postagem/create', [PostagemController::class, 'store'])->name('postagem.store');


// SHOW - GET
Route::get('/postagem/{id}', [PostagemController::class, 'show'])->name('postagem.show');

// EDIT
Route::get('/postagem/{id}/edit' , [PostagemController::class, 'edit'])->name('postagem.edit');

// PUT

Route::put('/postagem/{id}/edit' , [PostagemController::class, 'update'])->name('postagem.update');

// DELETE

Route::delete('/postagem/{id}' , [PostagemController::class, 'destroy'])->name('postagem.destroy');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\Listar_PubliController;
use App\Http\Controllers\Mostrar_PostagemController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PesquisarController;
use App\Http\Controllers\Listar_AutorController;




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



Route::get('/signin',[App\Http\Controllers\LoginController::class,'index'])->name('login.index');
Route::post('/signin',[App\Http\Controllers\LoginController::class,'store'])->name('login.store');
Route::get('/signinout',[App\Http\Controllers\LoginController::class,'destroy'])->name('login.destroy');


Route::get('/sobre', [App\Http\Controllers\SobreController::class, 'index'])->name('sobre');
Route::get('/pesquisar', [App\Http\Controllers\PesquisarController::class, 'index'])->name('pesquisar');
Route::get('/listar_publi/{id?}', [App\Http\Controllers\Listar_PubliController::class, 'index'])->name('listar_publi');
Route::get('/listar_publi/curtida/{id}', [App\Http\Controllers\Listar_PubliController::class, 'curtida'])->name('listar_publi/curtida')->middleware('auth');


Route::get('/listar_autor', [App\Http\Controllers\Listar_AutorController::class, 'autor'])->name('listar_autor');

Route::post('/perfil/editar_perfil/{id}', [App\Http\Controllers\PerfilController::class, 'perfilUpdate'])->name('editar_perfil');
Route::get('/perfil/{id}', [App\Http\Controllers\PerfilController::class, 'autorPostagem'])->name('autorPostagem');

Route::get('/mostrar_postagem/{id}', [App\Http\Controllers\Mostrar_PostagemController::class, 'postagem'])->name('mostrar_postagem');
// Route::get('/perfil', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil');
Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'index'])->name('contato');


Route::post('mostrar_postagem/postagemComentario/{id}', [App\Http\Controllers\Mostrar_PostagemController::class, 'postagemComentario'])->name('postagemComentario')->middleware('auth');
Route::post('/login_usuario', [App\Http\Controllers\UserController::class, 'login'])->name('login_usuario');
Route::post('/cadastrar_usuario', [App\Http\Controllers\UserController::class, 'cadastrar'])->name('cadastrar_usuario');
Route::post('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout_usuario');

Route::post('/enviar_mensagem', [App\Http\Controllers\ContatoController::class, 'enviarMensagem'])->name('enviar_mensagem');
Route::get('/mensagens', [App\Http\Controllers\ContatoController::class, 'listarMensagens'])->name('listar_mensagens');
Route::get('/mensagens/{id}', [App\Http\Controllers\ContatoController::class, 'show'])->name('mensagens_show');
Route::delete('/mensagens/{id}', [App\Http\Controllers\ContatoController::class, 'destroy'])->name('mensagens_destroy');


Route::post('/denuncia_usuario', [App\Http\Controllers\Denunciar_usuarioController::class, 'denuncia_usuario'])->name('denuncia_usuario');
Route::get('/denuncia_usuario', [App\Http\Controllers\Denunciar_usuarioController::class, 'index'])->name('denuncia_usuario_index');
Route::get('/denuncia_usuario/{id}', [App\Http\Controllers\Denunciar_usuarioController::class, 'show'])->name('denuncia_usuario_show');
Route::post('/denuncia_usuario/store', [App\Http\Controllers\Denunciar_usuarioController::class, 'store'])->name('denuncia_usuario.store');
Route::delete('/denuncia_usuario/{id}', [App\Http\Controllers\Denunciar_usuarioController::class, 'destroy'])->name('denuncia_usuario.destroy');

Route::post('/denuncia_postagem', [App\Http\Controllers\Denunciar_postagemController::class, 'denuncia_postagem'])->name('denuncia_postagem');
Route::get('/denuncia_postagem', [App\Http\Controllers\Denunciar_postagemController::class, 'index'])->name('denuncia_postagem_index');
Route::get('/denuncia_postagem/{id}', [App\Http\Controllers\Denunciar_postagemController::class, 'show'])->name('denuncia_postagem_show');
Route::post('/denuncia_postagem/store', [App\Http\Controllers\Denunciar_postagemController::class, 'store'])->name('denuncia_postagem.store');


Route::post('/denuncia/justificativa', [App\Http\Controllers\Denunciar_postagemController::class, 'justificativa'])->name('justificativa');




  // -------------------------------CRUD CATEGORIA ----------------------------------------

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


 // -------------------------------CRUD POSTAGEM ----------------------------------------

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


// BLOG

Route::get('/blog/categria/{id}', [BlogController::class, 'categoriaPostagem'])->name('blog.categoriaPostagem');


 // -------------------------------CRUD PUBLICAÇÃO ----------------------------------------

Route::get('/publicar', [App\Http\Controllers\PublicacaoController::class, 'index'])->name('formulario');

Route::get('/publicacao/create', [App\Http\Controllers\PublicacaoController::class, 'create'])->name('publicacao.create');

Route::post('/publicacao/create', [App\Http\Controllers\PublicacaoController::class, 'store'])->name('publicacao.store');

Route::get('/publicacao/{id}', [App\Http\Controllers\PublicacaoController::class, 'show'])->name('publicacao.show');

Route::get('/publicacao/{id}/edit', [App\Http\Controllers\PublicacaoController::class, 'edit'])->name('publicacao.edit');

Route::put('/publicacao/{id}/edit', [App\Http\Controllers\PublicacaoController::class, 'update'])->name('publicacao.update');

Route::delete('/publicacao/{id}', [App\Http\Controllers\PublicacaoController::class, 'destroy'])->name('publicacao.destroy');

Route::get('/criacao_diy', [App\Http\Controllers\PublicacaoController::class, 'indexUsuario'])->name('criacao_diy');

<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\ProdutoPageController;
use App\Http\Controllers\UserController;
use App\Models\Produto;

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


Route::resource('/produtos', ProdutoPageController::class)->middleware(['auth']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';


Route::post('produto/search', [ProdutoController::class, 'search'])->name('produto.search');
Route::post('produtos/search', [ProdutoPageController::class, 'search'])->name('produtos.search');
Route::post('user/search', [UserController::class, 'search'])->name('user.search');


Route::resource('/produto', ProdutoController::class)->middleware(['auth', 'admin']);
Route::resource('/user', UserController::class)->middleware(['auth', 'admin']);


Route::get('admin', function(){
    return view('Admin.adminWelcome');
})->middleware(['auth', 'admin']);


Route::get('sem_permissao', function(){
    return view('sem_permissao');
})->name('sem_permissao');


Route::resource('/cart', CartController::class)->middleware('auth');

// Rotas do carrinho de compras
Route::get('/carrinho', [CarrinhoController::class, 'index'])->name('carrinho.index');
Route::get('/carrinho/adicionar',function(){
    return redirect()->route('carrinho.index');
});
 
Route::post('/carrinho/adicionar', [CarrinhoController::class, 'adicionar'])->name('carrinho.adicionar');
Route::delete('/carrinho/remover', [CarrinhoController::class, 'remover'])->name('carrinho.remover');
Route::post('/carrinho/concluir', [CarrinhoController::class, 'concluir'])->name('carrinho.concluir');
Route::get('/carrinho/compras', [CarrinhoController::class, 'compras'])->name('carrinho.compras');
Route::post('/carrinho/cancelar', [CarrinhoController::class, 'cancelar'])->name('carrinho.cancelar');
Route::post('/carrinho/desconto', [CarrinhoController::class, 'desconto'])->name('carrinho.desconto');

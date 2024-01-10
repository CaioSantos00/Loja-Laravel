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
    return view('index');
});

Route::get('/produtos', function () {
    return view('produtos');
});


Route::get('/produto', function () {
    return view('visualiProduto');
});

Route::get('/entrar', function () {
    return view('entre');
});

Route::get('/carrinho', function () {
    return view('telaCarrinho');
});

Route::get('/finalizar', function () {
    return view('fimCarrinho');
});

Route::get('/cadastrar', function () {
    return view('cadasterUser');
});

Route::get('/admin', function () {
    return view('adm/perfil');
});

Route::get('/admin/cadastrarproduto', function () {
    return view('adm/cadastroProduto');
});

Route::get('/admin/consultarproduto', function () {
    return view('adm/consultaProduct');
});

Route::get('/admin/consultarusuario', function () {
    return view('adm/consultaUser');
});

Route::get('/admin/pedido', function () {
    return view('adm/pedidos');
});

Route::get('/admin/detalhespedido', function () {
    return view('adm/pedidosDetalhes');
});

Route::get('/admin/minhaconta', function () {
    return view('adm/minhaConta');
});

Route::get('/admin/error', function () {
    return view('adm/errorAdm');
});

Route::get('/perfil', function () {
    return view('user/perfil');
});

Route::get('/perfil/minhaconta', function () {
    return view('user/minhaConta');
});

Route::get('/perfil/enderecos', function () {
    return view('user/enderecos');
});

Route::get('/perfil/minhascompras', function () {
    return view('user/myCompras');
});

Route::get('/emailvalido', function () {
    return view('emailVal');
});

Route::get('/resetarsenha', function () {
    return view('resetPass');
});
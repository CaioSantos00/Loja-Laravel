<?php

use Illuminate\Support\Facades\Route;

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
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


//==================MENU DE NAVEGACAO PRINCIPAL DO PORTAL =============================
Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/portal', function () {
    return view('pages.portal');
})->name('portal');
Route::get('/lojas', function () {
    return view('pages.lojas');
})->name('lojas');
Route::get('/servicos', function () {
    return view('pages.servicos');
})->name('servicos');
Route::get('/entretenimento', function () {
    return view('pages.entretenimento');
})->name('entretenimento');
Route::get('/noticias', function () {
    return view('pages.noticias');
})->name('noticias');
Route::get('/contato', function () {
    return view('pages.contato');
})->name('contato');
//==================MENU DE NAVEGACAO PRINCIPAL DO PORTAL =============================


//==================LINK PARA CADA TIPO DE USUARIO DO PORTAL =============================
Route::get('/portallojista', function () {
    return view('pages.portallojista');
})->name('portallojista');
Route::get('/portalcliente', function () {
    return view('pages.portalcliente');
})->name('portalcliente');
//==================LINK PARA CADA TIPO DE USUARIO DO PORTAL =============================



//==================LINK PARA PAGINAS DE ADMINISTRACAO DO PORTAL =============================
Route::get('/admin', function () {
    return view('pages.admin.admin');
})->name('admin');
Route::get('/gerenciar_noticias', function () {
    return view('pages.admin.gerenciar_noticias');
})->name('gerenciar_noticias');
Route::get('/gerenciar_lojas', function () {
    return view('pages.admin.gerenciar_lojas');
})->name('gerenciar_lojas');
Route::get('/gerenciar_servicos', function () {
    return view('pages.admin.gerenciar_servicos');
})->name('gerenciar_servicos');
Route::get('/gerenciar_suporte', function () {
    return view('pages.admin.gerenciar_suporte');
})->name('gerenciar_suporte');
//==================LINK PARA PAGINAS DE ADMINISTRACAO DO PORTAL =============================
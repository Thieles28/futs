<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/cadastrar', 'HomeController@cadastrar')->name('cadastrar');
Route::get('/pagina/topo', 'PaginaController@index')->name('topo');
Route::get('/pagina/editar/{id}', 'PaginaController@editar')->name('editar');
Route::put('/pagina/atualizar/{id}', 'PaginaController@atualizar')->name('atualizar');
Route::get('/', 'PaginaController@paginaTopo')->name('topo_site');
Route::get('/pagina/slider', 'PaginaController@indexSlider')->name('slider');
Route::get('/pagina/slider/editar/{id}', 'PaginaController@editarSlider')->name('editar_slider');
Route::put('/pagina/slider/atualizar/{id}', 'PaginaController@atualizarSlider')->name('atualizar_slider');
Route::get('/pagina/conteudo', 'PaginaController@indexConteudo')->name('conteudo');
Route::get('/pagina/conteudo/editar/{id}', 'PaginaController@editarConteudo')->name('editar_conteudo');
Route::put('/pagina/conteudo/atualizar/{id}', 'PaginaController@atualizarConteudo')->name('atualizar_conteudo');
Route::get('/pagina/artilharia', 'PaginaController@indexArtilharia')->name('artilharia');
Route::get('/pagina/artilharia/editar/{id}', 'PaginaController@editarArtilharia')->name('editar_artilharia');
Route::put('/pagina/artilharia/atualizar/{id}', 'PaginaController@atualizarArtilharia')->name('atualizar_artilharia');
Route::get('/pagina/patrocinio', 'PaginaController@indexPatrocinio')->name('patrocinio');
Route::get('/pagina/patrocinio/editar/{id}', 'PaginaController@editarPatrocinio')->name('editar_patrocinio');
Route::put('/pagina/patrocinio/atualizar/{id}', 'PaginaController@atualizarPatrocinio')->name('atualizar_patrocinio');
Route::get('/perfil/', 'HomeController@perfil')->name('perfil');


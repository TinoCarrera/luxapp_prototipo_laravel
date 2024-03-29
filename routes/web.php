<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'FrontController@index');
Route::get('/productos/{categoria}', 'FrontController@categoria');
Route::get('/productos/{categoria}/{subcategoria}', 'FrontController@subcategoria');
Route::get('/{producto}', 'FrontController@producto');
Route::get('/blog', 'FrontController@blog');
Route::get('/blog/{publicacion}', 'FrontController@publicacion');
Route::get('/panaderia', 'FrontController@panaderia');
Route::get('/direccion', 'FrontController@direccion');

Route::group(['prefix'=>'admin','middleware'=>'role:admin'], function(){
    Route::resource('/usuarios', 'Admin\UsuariosController',['as'=>'admin']);
    Route::resource('/categorias', 'Admin\CategoriasController',['as'=>'admin']);
    Route::resource('/subcategorias', 'Admin\SubcategoriasController',['as'=>'admin']);
    Route::resource('/productos', 'Admin\ProductosController',['as'=>'admin']);
    Route::resource('/pedidos', 'Admin\PedidosController',['as'=>'admin']);
    Route::resource('/detalles', 'Admin\DetallesController',['as'=>'admin']);
    Route::resource('/portadas', 'Admin\PortadasController',['as'=>'admin']);
    Route::resource('/publicaciones', 'Admin\PublicacionesController',['as'=>'admin']);
});

Route::post('/carrito/agregar','CarritoController@agregar')->name('carrito.agregar');
Route::get('/carrito/checkout','CarritoController@checkout')->name('carrito.checkout');
Route::post('/carrito/remover','CarritoController@remover')->name('carrito.remover');
Route::post('/carrito/vaciar','CarritoController@vaciar')->name('carrito.vaciar');
Route::get('/carrito/procesarpedido','CarritoController@procesarpedido')->name('carrito.procesarpedido');

Route::group(['prefix'=>'cliente','middleware'=>'role:cliente'], function(){
    Route::get('/home', 'HomeController@index')->name('home');
});

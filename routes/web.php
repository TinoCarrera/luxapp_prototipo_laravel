<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'FrontController@index');

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

Route::group(['prefix'=>'cliente','middleware'=>'role:cliente'], function(){
    
    Route::get('/home', 'HomeController@index')->name('home');
   
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

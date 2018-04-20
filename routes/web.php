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


Route::get('pagina',function(){
	echo "Hola Klvst3r";
});


Route::post('nuevapagina',function(){
	echo "Hola Klvst3r";
});
/*
Route::get('usuario/nuevo',function(){
	echo "Hola nuevo usuario";
});*/

Route::get('usuario/{nombre}',function($usuario){
	//echo "Hola: " . $usuario ;
	return "Hola: " . $usuario;
});


Route::Controller("producto", "ProductoController");
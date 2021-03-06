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


/*Route::get('pagina',function(){
	echo "Hola Klvst3r";
});*/


/*Route::post('nuevapagina',function(){
	echo "Hola Klvst3r";
});*/
/*
Route::get('usuario/nuevo',function(){
	echo "Hola nuevo usuario";
});*/

/*Route::get('usuario/{nombre}',function($usuario){
	//echo "Hola: " . $usuario ;
	return "Hola: " . $usuario;
});*/


/*Route::Controller("producto", "ProductoController");*/


//La ruta pagina nos devolvera una vista
/*Route::get('pagina/{numero}',function($numero){
	return view("pagina.index")->with("n", $numero);
}); */

//Reoute::controller is deprecated
//https://laracasts.com/discuss/channels/laravel/routecontroller-in-laravel-53
//https://stackoverflow.com/questions/23505875/laravel-routeresource-vs-routecontroller

// Another
//https://www.cloudways.com/blog/controllers-middleware-laravel/

//Route::controller('producto','ProductoController'); 

Route::resource('producto','ProductoController'); 

/*Route::resource('producto', 'ProductoController', [
    'only' => ['index', 'show']
]);*/


<?php

//llamo controlador
use App\Http\Controllers\ProductoController;

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

Route::get('/', function () {
    return "sorangel";
});

Route::get('/hola', function () {
    return "hola";
});

Route::get('/megusta', function () {
    return "me gusta sorangel";
});


Route::get('/es', function () {
    return "sorangel linda";
});

Route::get('productos/{id}', function ($id) {
    return "los detalles del producto $id";
});


Route::get('/productosl/{id?}',function($id=1){
	return "cliente $id";
});

Route::get('/clientes/{id?}/{nombre?}',function($id=1,$nombre="sorangel"){
	return " El $id cliente y el $nombre";
});

Route::get('listadoproductos',[ProductoController::class,'index']);

Route::get('listadoproductos/{producto}',[ProductoController::class,'show']);

//categorias
Route::get('categorias/{id}/venta/{idVenta?}',function($id,$idVenta=null){
	
});



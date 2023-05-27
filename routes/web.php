<?php

//llamo controlador
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\BaresController;

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
//rutas
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
//Route::get('categorias/{id}/venta/{idVenta?}',function($id,$idVenta=null){
//});
	
//cree nueva vista
//vista noral sin controller
/*Route::get('categorias',function()
{
   return view('categorias.index');	
});
*/
//vista con controller
Route::get('categorias',[ProductoController::class,'index']);
//jerarguia primero va el de registro
Route::get('categorias/create',[ProductoController::class,'create']);
Route::post('categorias',[ProductoController::class,'store']);
Route::get('categorias/{id}/edit',[ProductoController::class,'edit']);
Route::put('categorias/{id}',[ProductoController::class,'update']);
Route::delete('categorias/{id}',[ProductoController::class,'destroy']);

Route::get('categorias/{categoria}',[ProductoController::class,'show']);


//vista clientes
/*Route::get('bares',function()
{
   return "hola sorangel";	
});

Route::get('baresid/{id}',function($id)
{
   return "hola sorangel $id";	
});

Route::get('baresida/{id?}',function($id=1)
{
	if($id!=1)
	{
		return "error";
	}
	else{
		if($id==1)
	    {
          return "hola sorangel con $id";	
		} 
	}
});


Route::get('listadobares',function()
{
   return view("bares.bares");	
});
*/

Route::get('bares',[BaresController::class,'index']);
Route::get('bares/create',[BaresController::class,'create']);
Route::post('bares',[BaresController::class,'store']);
Route::get('bares/{bar}',[BaresController::class,'show']);
Route::get('bares/{id}/edit',[BaresController::class,'edit']);
Route::put('bares/{id}',[BaresController::class,'update']);
Route::delete('bares/{id}',[BaresController::class,'destroy']);




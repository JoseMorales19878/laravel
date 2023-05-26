<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
	public function index()
	{
		 return "Controller catalogos de productos";
	}
	
	public function show($nombre)
	{
		 return "el nombre del producto $nombres";
	}
	
}

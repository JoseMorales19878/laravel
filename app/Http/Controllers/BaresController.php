<?php

namespace App\Http\Controllers;
use App\Models\bares;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BaresController extends Controller
{
	
	public function index()
	{
		//se le pasa el id para eliminar
		 //$categorias=DB::select('select *from categoria where activo=1');
		 //para eliminar return view('categorias.index',['id'=>1]);
	    return view('bares.index');
	}
	
	public function show($bar)
	{
		 return view('bares.show',['bar'=>$bar]);
	}
	
	public function create()
	{
		 return view('bares.create');
	}
	
	public function store(Request $request)
	{
		$producto=new bares();
		$producto->nombre=$request->input('nombre');
		$producto->descripcion=$request->input('descripcion');
		$producto->save();
		//guardo registro
		return ("Registro Guardado");
		/*echo "<pre>";
        print_r($request->all());
		echo $request->method();
		echo $request->input('nombre');
	    echo $request->input('codigo');
		echo "</pre>";*/
	}
	
	/*
	public function store(Request $request)
	{
		$producto=new mirton();
		$producto->nombre=$request->input('nombre');
		$producto->codigo=$request->input('codigo');
		$producto->save();
		//guardo registro
		return ("Registro Guardado");
	}
	
	public function edit($id)
	{
		
		//$producto=mirton::find($id)
		//return view('bares.edit',['id'=>$id,'producto'=>$producto]);
	}
	
	public function update(Request $request,$id)
	{
		echo "<pre>";
        echo $id.'-';
		echo $request->method();
		echo $request->input('nombre');
	    echo "</pre>";
	}
	
	public function destroy($id)
	{
		echo "registro id eliminado";
        
	}
	*/
}

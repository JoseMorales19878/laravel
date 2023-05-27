<?php

namespace App\Http\Controllers;
use App\Models\mirton;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductoController extends Controller
{
	/*public function index()
	{
		 return "Controller catalogos de productos";
	}*/
	
	
	
	/*public function show($nombre)
	{
		 return "el nombre del producto $nombres";
	}*/
	//video 5 vistas
	
	public function index()
	{
		//se le pasa el id para eliminar
		 //$categorias=DB::select('select *from categoria where activo=1');
		 //para eliminar return view('categorias.index',['id'=>1]);
	    //return view('categorias.index',['lista'=>$categorias]);
		//orm
	    //busqueda por filtro
    	//el campo no existe en mi bd es la explicacion del video
		//$productos=mirton::where('activo','=',1)->get();
		//$productos=mirton::where('activo',1)->get();
		//singifica que es iguakl a auno la linea anterior
		//$productos=mirton::where('existencia','>',50)->get();
		//$productos=mirton::where('existencia','>',50)->get();
        // $productos=mirton::where('description','LIKE',"aceite%")->get();
        //busca todo los registro que inicie con la palabra aceite
         // $productos=mirton::where('description','LIKE',"%bonafon%")->get();
        //busca todo los registro con la palabra bonafon no importa si es al inicio y al final
        /*
		$productos=mirton::where('existencia','>=',10)
		->where('existencia','<=',50)
		->get();*/
		//$productos=mirton::where([['existencia','>=',10],['existencia','<=',50]])->get(); funciona como and
	    //$productos=mirton::where('existencia','>=',10)->orWhere('precio','<',10)->get(); funciona como or
        //$productos=mirton::whereBetween('existencia',[0,10])->get()
        //whereBetween trae todos los que estan en un rango entre el 0-10 de existencia
          //$productos=mirton::whereIn('existencia',[0,2,6,1000])->get()
         //whereIn trae una lista todo lo que tienen existencia de los valores del areglos
          //$productos=mirton::whereNotIn('existencia',[0,2,6,1000])->get()
           //es el denegacion
		    //$productos=mirton::whereDate('created_at',['2022-01-07'])->get()
		     //$productos=mirton::whereDate('created_at','>',['2022-01-07'])->get()
             //$productos=mirton::whereMonth('created_at','=','01')->get()
			 //busca por mes el 1 es enero 
			 //$productos=mirton::whereDay('created_at','=','01')->get()
              //busca por dia el 1  
			  //fecha
               //$productos=mirton::whereDay('updated_at','>','created_at')->get()
			   //entre columnas
			   //ordenar 
			  //$productos=mirton::where('activo',1)
			  //->ordeBy('description','desc')->
			  //->get()
			  // $productos=mirton::where('activo',1)->ordeByDesc('description')->get()
              //muestra los campos que quiero que me aparescan
			  //$productos=mirton::select(['id','codigo'])
			  //->where('activo',1)
			  //->ordeByDesc('description')->limit(15)->get()
		        
				return view('categorias.index',['lista'=>mirton::all()]);
	}
	
	public function show($nombre)
	{
		 return view('categorias.show',['categoria'=>$nombre]);
	}
	
	public function create()
	{
		 return view('categorias.create');
	}
	
	/*public function store(Request $request)
	{
		echo "<pre>";
        print_r($request->all());
		echo $request->method();
		echo $request->input('nombre');
	    echo "</pre>";
	}*/
	
	
	public function store(Request $request)
	{
		$producto=mirton();
		$producto->nombre=$request->input('nombre');
		$producto->codigo=$request->input('codigo');
		$producto->save();
		//guardo registro
		return ("Registro Guardado");
	}
	
	public function edit($id)
	{
		
		$producto=mirton::find($id);
		return view('categorias.edit',['id'=>$id,'producto'=>$producto]);
	}
	
	public function update(Request $request,$id)
	{
		$producto=mirton::find($id);
		$producto->nombre=input('nombre');
		$producto->codigo=input('codigo');
			$producto->save();
		/*echo "<pre>";
        echo $id.'-';
		echo $request->method();
		echo $request->input('nombre');
	    echo "</pre>";*/
		return ("modificado con exito");
	}
	
	public function destroy($id)
	{
		$producto=mirton::find($id);
		$producto->delete();
		echo "registro id eliminado";
        
	}
	
}

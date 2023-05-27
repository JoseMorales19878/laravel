@extends('layout/template')

@section('title','edit producto')

@section('content')


<form method="post" action={{url('/categorias/'.$id)}}>
@method("PUT")
@csrf
Nombre: <input type="text" name="nombre" 
value="{{$producto->nombre}}">
Descripcion: <input type="text" name="codigo" 
value="{{$producto->codigo}}">

<input  type="submit" value="editar">
</form>

@endsection
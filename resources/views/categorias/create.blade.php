@extends('layout/template')

@section('title','nuevo producto')

@section('content')


<form method="post" action={{url('/categorias')}}>
@csrf
Nombre: <input type="text" name="nombre">
Codigo: <input type="text" name="codigo">
<input  type="submit" value="guardar">
</form>

@endsection
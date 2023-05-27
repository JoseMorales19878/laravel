@extends('layout/template')

@section('title','nuevo producto')

@section('content')


<form method="post" action={{url('/bares')}}>
@csrf
Nombre: <input type="text" name="nombre">
Descripcion: <input type="text" name="descripcion">
<input  type="submit" value="guardar">
</form>

@endsection
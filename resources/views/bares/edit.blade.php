@extends('layout/template')

@section('title','edit producto')

@section('content')


<form method="post" action={{url('/bares/'.$id)}}>
@method("PUT")
@csrf
Nombre: <input type="text" name="nombre">
<input  type="submit" value="editar">
</form>

@endsection
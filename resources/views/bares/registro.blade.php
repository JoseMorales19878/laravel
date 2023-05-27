
@extends('layout/template')

<style>

table,td,th{
border:1px solid;

}

table{
  width:90%;
}

</style>

@section('title','bares')

@section('content')
  <p>
     <h1>listado de  bares</h1>
	 <!--<form action= method="post">
	 
	 
	    @method("DELETE")
		@csrf
	   <button type="submit">Eliminar</button>
	 
	 </form>-->
	 
	 
<table>

<tr>
  <td>categoria</td>
  <td>descripcion</td>

</tr>

</table>
        
  </p>

@endsection
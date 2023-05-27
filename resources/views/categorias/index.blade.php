<html>
<head>
<title>listado de categorias</title>
<style>

table,td,th{
border:1px solid;

}

table{
  width:90%;
}

</style>


</head>

<body>

  <p>
     <h1>listado de la categoria vista{{$lista->count()}}</h1>
	 <!--va . $ i d al finalizar la action-->
	 <!--<form action={{url('categorias/')}} method="post">
	 
	 
	    @method("DELETE")
		@csrf
	   <button type="submit">Eliminar</button>
	 
	 </form>-->
	 
	 
<table>

<tr>
  <td>categoria</td>
  <td>descripcion</td>

</tr>
@foreach($lista AS $item)
<tr>
   <td>{{$item->nombre}}</td>
   <td>{{$item->codigo}}</td>
</tr>
@endforeach
</table>
        
  </p>

</body>
</html>
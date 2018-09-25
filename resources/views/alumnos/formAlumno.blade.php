@extends('layouts.tema')

@section('contenido')

<h1>
  Ingresa los datos del nuevo alumno
</h1>

<form action="{{ route('alumnos.store')}}" method="POST" >
	{{ csrf_field() }}
	
  <label for="nombre">Nombre:</label><br>
  <input type="text" name="nombre" required placeholder="Ingresa el Nombre" required><br>
	
	<label for="codigo">Codigo:</label><br>
  <input type="text" name="codigo" required placeholder="Ingresa el Codigo" required><br>
	
	<label for="carrera">Carrera:</label><br>
  <input type="text" name="carrera" required placeholder="Ingresa la Carrera" required><br><br>
	
  <input type="submit" value="Enviar">
</form>
@stop
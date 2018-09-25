@extends('layouts.tema')

@section('contenido')

<h1>
  Ingresa los datos de la nueva materia
</h1>

<form action="{{ route('materias.store')}}" method="POST" >
	{{ csrf_field() }}
	
  <label for="materia">Materia:</label><br>
  <input type="text" name="materia" required placeholder="Ingresa Materia" required><br>
	
	<label for="crn">CRN:</label><br>
  <input type="text" name="crn" required placeholder="Ingresa CRN" required><br>
	
	<label for="seccion">Seccion:</label><br>
  <input type="text" name="seccion" required placeholder="Ingresa Seccion" required><br>
	
	<label for="horario">Horario:</label><br>
  <input type="text" name="horario" required placeholder="Ingresa Horario" required><br><br>
	
  <input type="submit" value="Enviar">
</form>
@stop
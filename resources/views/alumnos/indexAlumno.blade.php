@extends('layouts.tema')

@section('contenido')
  
<h1>
  Listado de alumnos
</h1> 

<!-- <a href="{{ action('MateriaController@create')}}" class="btn btn-success">Nueva Materia</a> -->
<a href="{{ route('alumnos.create')}}" class="btn btn-success">Agregar Nuevo Alumno</a>

@if($alumnos->count() == 0)
<div class="alert-warning">
  No Tienes alumnos Registrados
</div>
@endif
@if($alumnos->count() != 0)
<table class="table">
  <thead>
    <th>ID</th>
    <th>NOMBRE</th>
    <th>CODIGO</th>
    <th>CARRERA</th>
  </thead>
  <tbody>
    @foreach($alumnos as $alumno)
    <tr>
      <td>{{ $alumno->id }}</td>
      <td>{{ $alumno->nombre }}</td>
      <td>{{ $alumno->codigo }}</td>
      <td>{{ $alumno->carrera}}</td>
    </tr>
    @endforeach
  </tbody>
</table>  
@endif
@endsection
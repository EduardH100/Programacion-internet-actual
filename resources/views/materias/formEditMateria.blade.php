@extends('layouts.tema')

@section('contenido')

<h1>
  Editar Materia
</h1>

<a href="{{ route('materias.create')}}" class="btn btn-success">Nueva Materia</a>

@if($materias->count() == 0)
<div class="alert-warning">
  No Tienes Materias Registradas
</div>
@endif
@if($materias->count() != 0)
<table class="table">
  <thead>
    <th>ID</th>
    <th>Materia</th>
    <th>CRN</th>
    <th>SECCION</th>
    <th>HORARIO</th>
    <th>Ultima Actualización</th>
  </thead>
  <tbody>
    @foreach($materias as $materia)
    <tr>
      <td>{{ $materia->id }}</td>
      <td>{{ $materia->materia }}</td>
      <td>{{ $materia->crn }}</td>
      <td>{{ $materia->seccion}}</td>
      <td>{{ $materia->horario}}</td>
      <td>{{ $materia->updated_at}}</td>
    </tr>
    @endforeach
  </tbody>
</table>  
@endif
@endsection
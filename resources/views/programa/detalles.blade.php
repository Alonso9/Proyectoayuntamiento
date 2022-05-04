@extends('layouts.plantilla')

@section('titulo', 'Detalles')

@section('contenido')
    <div align='center'>
    <h1>Nombre del programa {{$programa->nombre;}} </h1>
    </div>
    @foreach ($actividades as $act)
    <div align='center'>
        <p>Nombre de la Actividad: {{$act->actividad}}</p>
        <p>Descripcion de la Actividad: {{$act->descripcion}}</p>
        <p>Responsable de la Actividad: {{$act->departamentos}}</p>
    </div>

@endforeach
@endsection
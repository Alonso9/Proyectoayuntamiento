@extends('layouts.plantilla')

@section('titulo', 'Detalles')

@section('contenido')
    <div align='center'>
    <h1>Nombre del programa {{$programa->nombre;}} </h1>
    </div>
    @foreach ($actividades as $act)
    <div align='center'>
        <h1>-----------------------------------------------------------------------------------</h1>
        <p>Nombre de la Actividad: {{$act->actividad}}</p>
        <p>Descripcion de la Actividad: {{$act->descripcion}}</p>
        <p>Responsable de la Actividad: {{$act->departamentos}}</p>
        @foreach ($actividades2 as $evidencia)
            @if ($evidencia->actividad_id == $act->id)
            <p>Nombre: {{$evidencia->nombre_archivo}}</p>
            <p>Archivo: {{$evidencia->archivo}}</p>
            @endif
        @endforeach
    </div>

@endforeach
@endsection
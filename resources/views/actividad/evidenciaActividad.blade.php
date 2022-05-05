@extends('layouts.plantilla')

@section('titulo', 'Evidencia')

@section('contenido')
    <div class="col-xl-12">
        @csrf
        <h2 align='center'>Formulario de evidencias de la actividad {{$actividad->actividad}}</h2>
        <form action="{{route('actividad.subirEvidencia')}}" method="POST" align='center'>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="nombre_actividad">Introduce el nombre de la evidencia:</label>
                <input name="nombre" type="text" required><br>
            </div>
            <div class="form-group">
                <label for="nombre_actividad">Introduce el archivo de evidencia:</label>
                <input name="evidencia" type="file" required><br>
                <input type="text" name="actividad_id" value="{{$actividad->id}}" hidden>
            </div>
            <div class="form-group">
                <br><label for="descripcion">Descripcion de la actividad realizada:</label><br>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10" required></textarea>
            </div>
            <div class="form-group">
                <br><input type="submit" class="btn btn-primary" value="Guardar">
                <input type="reset" class="btn btn-warning" value="Cancelar">
                <a href="javascript:history.back()">Ir al listado</a>
            </div>
            
        </form>
    </div>
    
@endsection

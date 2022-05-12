@extends('layouts.plantilla')

@section('titulo', 'Evidencia')

@section('contenido')
    <div id="containerEvidencia">
        <h2 id="titleEvidencia">Formulario de evidencias de la actividad {{$actividad->actividad}}</h2>
        <div id="containerForm">
            <form action="{{route('actividad.subirEvidencia',$actividad->id)}}" enctype="multipart/form-data" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="elementEvidencia">
                    <label class="evidenciaTxt" for="nombre_actividad">Introduce el nombre de la evidencia:</label>
                    <input id="evidenciaInput" name="nombre" type="text" required>
                </div>
                <div class="elementEvidencia">
                    <label class="evidenciaTxt" for="nombre_actividad">Introduce el archivo de evidencia:</label>
                    <input id="evidenciaFile" name="evidencia" type="file" required>
                    <input type="text" name="actividad_id" value="{{$actividad->id}}" hidden>
                </div>
                <div class="elementEvidencia" id="elementDesc">
                    <label class="evidenciaTxt" for="descripcion">Descripcion de la actividad realizada:</label>
                    <textarea name="descripcion" id="descripcion"></textarea>
                </div>
                <div id="elementBtn" >
                    <input type="submit" value="Guardar">
                    <input type="reset" value="Limpiar">
                </div>
                <a href="javascript:history.back()">Ir al listado</a>
                
            </form>
        </div>
    </div>
    
@endsection

@extends('layouts.plantilla')

@section('titulo', 'Form')

@section('contenido')
<div id="containerEvidencia">
    <h2 id="titleEvidencia" align='center'>Formulario de creacion de actividades para el programa "{{$programa->nombre}}"</h2>
    <div id="containerForm">
        <form action="{{route('actividad.store')}}" method="POST" align='center'>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="elementEvidencia">
                <label class="evidenciaTxt" for="nombre_actividad">Introduce el nombre de la actividad a crear:</label>
                <input name="nombre_actividad" type="text" required><br>
                <input type="text" name="programa_id" value="{{$programa->id}}" hidden>
            </div>
            <div class="elementEvidencia">
                <label class="evidenciaTxt" >Asigne departamento:</label>
                <select name="departamento" id="">
                    <option value="">Seleccione departamento</option>
                    @foreach ($departamentos as $departamento)
                        <option value="{{ $departamento->id }}">{!! $departamento->departamentos !!}</option>
                    @endforeach
                </select>
            </div>
            <div class="elementEvidencia" id="elementDesc">
                <br><label class="evidenciaTxt" for="descripcion">Descripcion de la actividad a crear:</label><br>
                <textarea id="descripcion" name="descripcion" id="nombre_programa" cols="30" rows="10" required></textarea>
            </div>
            <div class="form-group" id="elementBtn">
                <br><input type="submit" class="btn btn-primary" value="Guardar">
                <input type="reset" class="btn btn-warning" value="Cancelar">
                <a href="javascript:history.back()">Ir al listado</a>
            </div>
            
        </form>
    </div>
</div>
@endsection

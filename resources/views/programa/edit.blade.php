@extends('layouts.plantilla')

@section('titulo', 'Editar Programa')

@section('contenido')
    <div class="col-xl-12">
        @csrf
        
        <h2 align='center'>Formulario de actualizacion de programas</h2>
        <form action="{{route('programa.update', $programa->id)}}" method="POST" align='center'>
            @method('PUT')
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="nombre_programa">Introduce nuevo nombre del programa:</label>
                <input name="nombre_programa" value="{{$programa->nombre}}" type="text" required><br>    
            </div>
            {{-- <div class="form-group">
                <br><label for="nombre_programa">introduce nombre del programa:</label>
                <input type="text"  name="nombre_programa" required>
                <textarea name="nombre_programa" id="nombre_programa" cols="30" rows="10"></textarea>
            </div> --}}
            <div class="form-group">
                <br><input type="submit" class="btn btn-primary" value="Guardar">
                {{-- <input type="reset" class="btn btn-warning" value="Cancelar"> --}}
                <a href="javascript:history.back()" class="btn btn-warning">Cancelar</a>
                <a href="javascript:history.back()">Ir al listado</a>
            </div>
            
        </form>
    </div>
    
@endsection

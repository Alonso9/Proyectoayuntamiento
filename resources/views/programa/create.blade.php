@extends('layouts.plantilla')

@section('titulo', 'Form')

@section('contenido')
    <div class="col-xl-12">
        @csrf
        <h2 align='center'>Formulario de creacion de programas</h2>
        <form action="{{route('programa.store')}}" method="POST" align='center'>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="nombre_programa">introduce nombre del programa:</label>
                <input name="nombre_programa" type="text" required><br>    
            </div>
            {{-- <div class="form-group">
                <br><label for="nombre_programa">introduce nombre del programa:</label>
                <input type="text"  name="nombre_programa" required>
                <textarea name="nombre_programa" id="nombre_programa" cols="30" rows="10"></textarea>
            </div> --}}
            <div class="form-group">
                <br><input type="submit" class="btn btn-primary" value="Guardar">
                <input type="reset" class="btn btn-warning" value="Cancelar">
                <a href="javascript:history.back()">Ir al listado</a>
            </div>
            
        </form>
    </div>
    
@endsection

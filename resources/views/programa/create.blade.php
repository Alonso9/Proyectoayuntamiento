@extends('layouts.plantilla')

@section('titulo', 'Form')

@section('contenido')
<div>
    @csrf
    <h2 class="tituloArea">Creacion de programas</h2>
    <div class="container">
        <div class="formulario">
            <form action="{{route('programa.store')}}" method="POST" align='center'>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="formularioCreacionPrograma" class="form-group">
                    <label class="labelFormulario" for="nombre_programa">Introduce el nombre del programa a crear:</label>
                    <div class="inputContainer">
                        <input placeholder="Introduce tu nuevo programa" type="text" class="inputProgramaNuevo" name="nombre_programa" type="text" required><br>
                    </div>
                </div>
                <div class="buttonsContainer">
                    <br>
                    <div class="btnGuardarContainer">
                        <i id="iconoGuardar" class="fa-solid fa-file-arrow-down"></i>
                        <input class="btnGuardar" type="submit" value="Guardar">
                    </div>

                    <div class="btnGuardarContainer">
                        <i id="iconoGuardar" class="fa-solid fa-text-slash"></i>
                        <input class="btnGuardar" type="reset" value="Resetear">
                    </div>

                    <div class="btnGuardarContainer">
                        <i id="iconoGuardar" class="fa-solid fa-delete-left"></i>
                        <input class="btnGuardar" type="submit" value="Cancelar" onclick="javascript:history.back()">
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
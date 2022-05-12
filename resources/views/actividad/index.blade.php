@extends('layouts.plantilla')

@section('titulo', 'Actividades')

@section('contenido')

<<<<<<< HEAD
<h2 class="tituloArea">{{ $nombre->nombre }} / actividades </h2>

<div class="container">


    <div class="aside">
        @csrf
        <form action="{{route('actividad.index')}}" method="GET">
            <div>
                <div>
                    <div class="btnNuevo">
                        <i id="iconoNuevo" class="fa-solid fa-file-circle-plus"></i>
                        <a class='btnNuevoTxtAct' href="{{route('crearActividad', $nombre->id)}}">Crear nueva actividad</a>
                    </div>
                    <div class='inputContainer'>
                        <input type="text" class="inputPrograma" placeholder="Busca un programa" name="actividad">
                        <i id="iconoBuscar" class="fa-solid fa-magnifying-glass-arrow-right" value="Buscar"></i>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <div class="section">
        <div>
            <div>
                <table class="tableContenido">
                    <thead>
                        <tr>
                            <th class="tdPrueba">Opciones</th>
                            <th class="tdPrueba">ID</th>
                            <th class="tdPrueba">Id programa</th>
                            <th class="tdPrueba">Nombre</th>
                            <th class="tdPrueba">Descripcion</th>
                            <th class="tdPrueba">Responsables</th>
                            <th class="tdPrueba">Fecha</th>
                            <th class="tdPrueba">Detalles</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($actividades)<=0) <tr>
                            <td colspan="8">No hay resultados</td>
=======
    <div class="container">
        <h2 align='center'>Actividades del programa {{ $nombre->nombre }}</h2>
        <div class="row">
            <div class="col-lx-12">
                @csrf
                <form action="{{route('actividad.index')}}" method="GET">
                    <div class="form-row">
                        <div class="col-sm-4 my-1">
                            <label>Buscar actividad:</label>
                            <input type="text" class="form-control" name="actividad"  placeholder="Nombre de la actividad">
                            <input type="text" value="{{$nombre->id}}" name="programa_id" hidden>
                        </div>
                        <div class="col-auto my-1">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                            <a href="{{route('crearActividad', $nombre->id)}}" class="btn btn-success">Nueva</a>
                        </div>
                    </div>
                </form>
            </div>   
            <div class="col-lx-12">
                <div class="table-respon">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Opciones</th>
                                <th>ID</th>
                                <th>Id del programa</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Responsables</th>
                                <th>Fecha</th>
                                <th>Subir Evidencia</th>
                                <th>Detalles</th>
>>>>>>> 216d3f0c59a5b5faac3b64728493fee42ea1769d
                            </tr>

                            @else
                            @foreach ($actividades as $item)
                            <tr>
                                <td><a href="{{route('actividad.edit',$item->id)}}" class="btn btn-warning btn-sm">Editar</a>
                                    <form action="{{route('eleminarActividad',$item->id)}}"">
                                        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger btn-sm" value="Borrar">
                                    </form>
                                </td>
                                <td>{{$item->id}}</td>
                                <td>{{$item->programa_id}}</td>
                                <td>{{$item->actividad}}</td>
                                <td>{{$item->descripcion}}</td>
                                <td>{{$item->departamentos}}</td>
                                <td>{{$item->fecha}}</td>
                                <th><a href="{{route('evidenciaActividad',$item->id)}}">Evidencia</a></th>
                                <td><a href="{{route('detallesPrograma',$nombre->id)}}" >Detalles</a></td>
                            </tr>
                            @endforeach
                            @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection
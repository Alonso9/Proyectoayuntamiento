@extends('layouts.plantilla')

@section('titulo', 'Programas')

@section('contenido')

    <div class="container">
        <h2 align='center'>Gestión de Programas creados</h2>
        <div class="row">
            <div class="col-lx-12">
                @csrf
                <form action="{{route('programa.index')}}" method="GET">
                    <div class="form-row">
                        <div class="col-sm-4 my-1">
                            <label>Buscar Programa: </label>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre del programa">
                        </div>
                        <div class="col-auto my-1">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                            <a href="{{route('programa.create')}}" class="btn btn-success">Nuevo</a>
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
                                <th>Nombre</th>
                                <th>Fecha</th>
                                <th>Actividades</th>
                                <th>Detalles</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($programas)<=0)
                                <tr>
                                    <td colspan="8">No hay resultados</td>
                                </tr>
                                
                            @else
                            @foreach ($programas as $item)
                            <tr>
                                <td><a href="{{route('programa.edit',$item->id)}}" class="btn btn-warning btn-sm">Editar</a> 
                                    {{-- <a href="{{route('programa.destroy',$item->id)}}" class="btn btn-warning btn-sm">Borrar</a>  --}}
                                    <form action="{{route('eleminarPrograma',$item->id)}}"">
                                        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger btn-sm" value="Borrar">
                                    </form>
                                    <!-- Button trigger modal -->
                                    {{-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="delete_modal_programa_{{$item->id}}">
                                        Borrar
                                    </button> --}}
                                </td>
                                <td>{{$item->id}}</td>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->fecha}}</td>
                                {{-- <td><a href="{{route('actividadesPrueba', ['programa_id' => $item->id] )}}">Actividades</a></td> --}}
                                {{-- <td><a href="{{ route('detalleActividad', $item->id) }}">Detalles</a></td> --}}
                            </tr>
                             {{-- @include('programa.delete') --}}
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    {{-- {{$programas->links()}} --}}
                </div>
                <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#label">
    Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="label" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        ...
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
    </div>
    </div>
            </div>
        </div>
    </div>
    
@endsection
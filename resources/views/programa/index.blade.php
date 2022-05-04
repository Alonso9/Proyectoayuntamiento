@extends('layouts.plantilla')

@section('titulo', 'Programas')

@section('contenido')


<h2 class="tituloArea">Gestión de Programas del Ayuntamiento de Manzanillo</h2>
<div class="container">
    <div class="aside">
        <div>
            @csrf
            <form action="{{route('programa.index')}}" method="GET">
                <div>
                    <div class="btnNuevo">
                        <i id="iconoNuevo" class="fa-solid fa-file-circle-plus"></i>
                        <a class='btnNuevoTxt' href="{{route('programa.create')}}">Crear nuevo programa</a>
                    </div>
                    <div class='inputContainer'>
                        <input type="text" class="inputPrograma" placeholder="Busca un programa" name="nombre">
                        <i id="iconoBuscar" class="fa-solid fa-magnifying-glass-arrow-right" value="Buscar"></i>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="section">
        <div>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th class="tdPrueba">Programa</th>
                            <th class="tdPrueba">Fecha</th>
                            <th class="tdPrueba">Actividades</th>
                            <th class="tdPrueba">Opciones</th>
                            <th class="tdPrueba">Detalles</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($programas)<=0) <tr>
                            <p></p>
                            <td id="msgNoProgramas" colspan="20">No hay programas</td>
                            </tr>
                            @else
                            @foreach ($programas as $item)
                            <p></p>
                            <tr class="resultadoTr">
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->fecha}}</td>
                                <td>
                                    <div class="btnVer">
                                        <i id="iconoVer" class="fa-solid fa-eye"></i>
                                        <a class="btnVerTxt" href="{{route('actividadesPrueba', ['programa_id' => $item->id] )}}">Ver actividades</a>
                                    </div>
                                </td>
                                <td class="opcionesContainer">
                                    <div class="btnEditar">
                                        <i id="iconoVer" class="fa-solid fa-file-pen"></i>
                                        <a class="btnVerTxt" href="{{route('programa.edit',$item->id)}}">Editar</a>
                                    </div>

                                    <form class="btnEditar" action="{{route('eleminarPrograma',$item->id)}}">
                                        @csrf
                                        <i id="iconoVer" class="fa-solid fa-delete-left"></i>
                                        <a class="btnVerTxt" href="{{route('eleminarPrograma',$item->id)}}}">Eliminar</a>

                                    </form>
                                </td>
                                @csrf
                                <td><a href="{{route('detallesPrograma',$item->id)}}}" >Detalles</a></td>
                            </tr>
                            @endforeach
                            @endif
                    </tbody>
                </table>
            </div>
            @endsection
        </div>
    </div>
</div>
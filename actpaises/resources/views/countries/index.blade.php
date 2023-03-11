@extends('layouts.app')
@section('title', 'Listar Pais')
@section('content')
    <div>
        <h3>Listado de Paises Creados</h3>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($countries as $country)

                <tr>
                    <td>{{$country -> name}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <form method="post" action="{{route('countries.destroy', $country->id)}}" id="eliminarpais_{{ $loop->iteration }}">
                                @csrf
                                @method('DELETE')
                            </form>
                            <a onclick="document.getElementById('eliminarpais_{{ $loop->iteration }}').submit()" class="btn btn-danger">Eliminar</a>
                            <a href=""
                               class="btn btn-warning">Editar</a>
                            <a href=""
                               class="btn btn-success">Ver</a>

                        </div>

                    </td>
                </tr>



            @endforeach

            </tbody>
        </table>
    </div>

@endsection

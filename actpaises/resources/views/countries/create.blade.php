@extends('layouts.app')
@section('title', 'Crear Pais')
@section('content')
    <h1>Crear un Pais</h1>

    <div>
        <form action="{{route('countries.store')}}" method="post">
            @csrf
            @method('Post')
            <label for="name">Escriba el nombre del Pais:</label>
            <input name="name" id="name" type="text">
            <button type="submit">Crear</button>
        </form>
    </div>

@endsection

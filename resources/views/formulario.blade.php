@extends('layouts.master')
@section('title', 'Formulario')

@section('content')
    <h1>Formulario</h1>
    <hr>

    <form action="/recibir" method="post">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
            @error('nombre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Fecha Nacimiento</label>
            <input type="date" class="form-control" name="fechaNac" value="{{old('fechaNac')}}">
            @error('fechaNac')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <label>Sexo</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sexo" value="hombre" {{old('sexo') == "hombre" ? "checked" : ""}}>
            <label class="form-check-label" for="flexRadioDefault1">Hombre</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sexo" value="mujer" {{old('sexo') == "mujer" ? "checked" : ""}}>
            <label class="form-check-label" for="flexRadioDefault2">Mujer</label>
        </div>
        @error('sexo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br>

        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="correo" value="{{old('correo')}}">
            @error('correo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input">
            <label class="form-check-label" for="exampleCheck1">Aceptar condiciones</label>
        </div>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
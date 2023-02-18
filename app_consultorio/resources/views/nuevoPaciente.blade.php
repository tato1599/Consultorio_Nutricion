@extends('layouts.app')


@section('title', 'Nuevo paciente')

@section('content')


    <h1>Nuevo paciente</h1>

    <form action="{{ route('guardar') }}" method="POST">
        @csrf
        <label><br>

            Nombre
            <input name="Nombre" type="text" value="{{ old('Nombre') }}">
            @error('Nombre')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>

            Apellido paterno
            <input name="ApellidoPaterno" type="text" value="{{ old('ApellidoPaterno') }}">
            @error('Apellido_Paterno')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>

            Apellido materno
            <input name="ApellidoMaterno" type="text" value=" {{ old('ApellidoMaterno') }} ">
            @error('Apellido_Materno')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
            <br>

            Fecha de nacimiento
            <input name="Nacimiento" type="date" value=" {{ old('Nacimiento') }}">
            @error('Fecha_de_nacimiento')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror

        </label><br>
        <button type="submit">Agregar</button>
    </form>


@endsection

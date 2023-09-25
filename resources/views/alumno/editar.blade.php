@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GYM | Estudiante</title>
  <style>
    main{
        display: flex;
        justify-content: center;
        align-items:center;
        flex-direction: column;
    }
    .opciones{
        display: flex;
        gap:20px;
        margin:30px;
    }
    form{
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
      margin:30px;
      display: flex;
      flex-direction: column;
      gap:10px;
      /* border:1px solid black; */
      padding: 30px;
      border-radius: 10px;
    }
    a{
      margin: 30px;
    }
    h1,h3{
      margin:30px;
    }
    form input{
      border-radius: 10px;
      outline: none;
      border:1px solid rgb(160, 155, 155);
      padding: 5px;
    }
    p{
      color:white;
      background: red;
      padding: 5px;
      text-align: center
    }
    
</style>
</head>
<body>
  <h1>Artes Marciales</h1>
  <a href="{{route('welcome')}}"><button class="btn btn-warning">Regresar</button></a>
  <h3>Editando tu clase:</h3>
  <main>
    {{-- @if (session('mensajeExito'))
      <div class="alert alert-success">
          {{ session('mensajeExito') }}
      </div>
    @endif --}}
    <div class="container-form">
      <h1>Edita la clase</h1>
      <form action="{{ route('alumno.actualizar', ['id' => $clase->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $clase->id }}"> {{-- Campo oculto con el id de la clase --}}
        <label for="nombre">Ingresa tu nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{$clase->nombre}}">
        @error('nombre')
            <p>Este campo debe estar completo</p>
        @enderror
        <label for="apellidos">Ingresa tus apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" value='{{$clase->apellidos}}'>
        @error('apellidos')
            <p>Este campo debe estar completo</p>
        @enderror
        <label for="correo">Ingresa tu correo electrónico:</label>
        <input type="email" name="correo" id="correo" value='{{$clase->correo}}'>
        @error('correo')
            <p>Este campo debe estar completo</p>
        @enderror
        <label for="genero">Selecciona tu género:</label>
        <select name="genero" id="genero">
          <option value="" disabled >SELECCIONA -></option>
          <option value="femenino" @if($clase->genero==='femenino') selected @endif >Femenino</option>
          <option value="masculino" @if($clase->genero==='masculino') select @endif>Masculino</option>
        </select>
        @error('genero')
            <p>Este campo debe estar completo</p>
        @enderror
        <label for="edad">Ingresa tu edad:</label>
        <input type="number" name="edad" id="edad" value='{{$clase->edad}}'>
        @error('edad')
            <p>Este campo debe estar completo</p>
        @enderror
        <label for="hora">Selecciona la hora:</label>
        <input type="time" name="hora" id="hora" value='{{$clase->hora}}'>
        @error('hora')
            <p>Este campo debe estar completo</p>
        @enderror
        <label for="fecha">Selecciona una fecha:</label>
        <input type="date" name="fecha" id="fecha" value='{{$clase->fecha}}'>
        @error('fecha')
            <p>Este campo debe estar completo</p>
        @enderror
        <button type="submit" class="btn btn-primary">Actualizar clase</button>
      </form>
    </div>


    
  </main>
</body>
</html>
@endsection
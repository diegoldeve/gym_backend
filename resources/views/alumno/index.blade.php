@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">      
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Croissant+One&family=Mooli&display=swap" rel="stylesheet">
        
  <title>GYM | Estudiante</title>
  <style>
    body{
      background-size:cover;
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
                background-image: url('{{asset('../public/img/artes6.jpg')}}');
    }
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
      font-family: 'Mooli', sans-serif;

    }
    label{
      font-family: 'Mooli', sans-serif;
    }
    h2, .title{
      font-family: 'Croissant One', cursive;
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
    .opc{
      display: flex;
    }
    
</style>
</head>
<body>
  <h1 class="title">Artes Marciales</h1>
  <a href="{{route('welcome')}}"><button class="btn btn-warning">Regresar</button></a>
  <div class="opc">
    <h3>Ve, edita o elimina tus clases aquí ➡️</h3>
    <a href="{{route('alumno.irBusqueda')}}"><button class="btn btn-success">Buscar clases</button></a>
  </div>
  <main>
    @if (session('mensajeExito'))
      <div class="alert alert-success">
          {{ session('mensajeExito') }}
      </div>
    @endif
    <div class="container-form">
      <form action="{{route('alumno.storage')}}" method="POST">
        @csrf
        <h2>Regístrate a las clases!</h2>
        <label for="nombre">Ingresa tu nombre:</label>
        <input type="text" name="nombre" id="nombre">
        @error('nombre')
            <p>Este campo debe estar completo</p>
        @enderror
        <label for="apellidos">Ingresa tus apellidos:</label>
        <input type="text" name="apellidos" id="apellidos">
        @error('apellidos')
            <p>Este campo debe estar completo</p>
        @enderror
        <label for="correo">Ingresa tu correo electrónico:</label>
        <input type="email" name="correo" id="correo">
        @error('correo')
            <p>Este campo debe estar completo</p>
        @enderror
        <label for="genero">Selecciona tu género:</label>
        <select name="genero" id="genero">
          <option value="" disabled selected>SELECCIONA -></option>
          <option value="femenino" >Femenino</option>
          <option value="masculino">Masculino</option>
        </select>
        @error('genero')
            <p>Este campo debe estar completo</p>
        @enderror
        <label for="edad">Ingresa tu edad:</label>
        <input type="number" name="edad" id="edad">
        @error('edad')
            <p>Este campo debe estar completo</p>
        @enderror
        <label for="hora">Selecciona la hora:</label>
        <input type="time" name="hora" id="hora">
        @error('hora')
            <p>Este campo debe estar completo</p>
        @enderror
        <label for="fecha">Selecciona una fecha:</label>
        <input type="date" name="fecha" id="fecha">
        @error('fecha')
            <p>Este campo debe estar completo</p>
        @enderror
        <button type="submit" class="btn btn-primary">Agregar clase</button>
      </form>
    </div>

    
  </main>
</body>
</html>
@endsection
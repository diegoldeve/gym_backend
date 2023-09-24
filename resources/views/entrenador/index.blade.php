@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GYM | Entrenador</title>
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
    a>button{
      margin-left:50px;
    }
    h2{
      margin:30px;
    }
    form input{
      border-radius: 10px;
      outline: none;
      border:1px solid rgb(160, 155, 155);
      padding: 5px;
    }
    
</style>
</head>
<body>
  <h2>Artes Marciales</h2>
  <a href="{{route('welcome')}}"><button class="btn btn-warning">Regresar</button></a>
  <main>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellidos</th>
          <th scope="col">Correo</th>
          <th scope="col">Género</th>
          <th scope="col">Edad</th>
          <th scope="col">Hora</th>
          <th scope="col">Fecha</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($alumnos as $alumno)
            <tr>
              <td>{{$alumno->id}}</td>
              <td>{{$alumno->nombre}}</td>
              <td>{{$alumno->apellidos}}</td>
              <td>{{$alumno->correo}}</td>
              <td>{{$alumno->genero}}</td>
              <td>{{$alumno->edad}}</td>
              <td>{{$alumno->hora}}</td>
              <td>{{$alumno->fecha}}</td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </main>
</body>
</html>
@endsection
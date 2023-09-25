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
    table{
      margin:50px;
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
    @if (session('mensajeExito'))
    <div class="alert alert-success">
        {{ session('mensajeExito') }}
    </div>
    @endif
    <form action="{{route('buscar.clases')}}" method="POST">
      @csrf
      <label for="email">Ingresa tu correo para buscar tus clases:</label>
      <input type="email" name="email" id="email">
      <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
    
  {{-- aquí se mostrará el campo del correo y si no, decir que no se encontró --}}
  @if(isset($clases) && count($clases) > 0)
  <h2>Resultados de la búsqueda:</h2>
  <table class="table">
      <thead>
          <tr>
              <th>Nombre</th>
              <th>Fecha</th>
              <th>Hora</th>
              <th>Acciones</th>
          </tr>
      </thead>
      <tbody>
          @foreach($clases as $clase)
          <tr>
              <td>{{ $clase->nombre }}</td>
              <td>{{ $clase->fecha }}</td>
              <td>{{ $clase->hora }}</td>
              <td>
                <form action="{{route('alumno.editar', ['id'=>$clase->id])}}" method="GET">
                  @csrf
                  <button style="margin:10px;" class="btn btn-warning">EDITAR</button>
                </form>
                <form 
                action="{{route('borrar.clase', ['id' => $clase->id])}}"
                method="POST">
                  @csrf
                  @method('DELETE')
                  <button style="margin:10px;" class="btn btn-danger">BORRAR</button>
                </form>
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
  @elseif(isset($clases) && count($clases) === 0)
  <p>No se encontraron clases para el correo proporcionado.</p>
  @endif
  </main>
</body>
</html>
@endsection
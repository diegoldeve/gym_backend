@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Artes Marciales</title>
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
            .title{
                margin:30px 50px;
            }
            
        </style>
    </head>
    <body>
        <main>
            <div class="title">
                <h2>Artes Marciales</h2>
            </div>
            <div class="opciones">
                <a href="{{route('entrenador.index')}}"><button class="btn btn-light">Soy entrenador</button></a>
                <a href="{{route('alumno.index')}}"><button class='btn btn-primary'>Soy alumno</button></a>
            </div>
        </main>
    </body>
    </html>
@endsection
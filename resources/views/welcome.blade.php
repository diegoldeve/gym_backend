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
        <title>Artes Marciales</title>
        <style>
            body{
                background-size:cover;
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed;
                background-image: url('{{asset('../public/img/artes2.jpg')}}');
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
            .title{
                margin:30px 50px;
            }
            h2{
                color:white;
                font-family: 'Mooli', sans-serif;
                display: inline;
            }
            h1{
                font-family: 'Croissant One', cursive;
                color:white;
                display: inline;
                font-size: 50px;
            }
            
        </style>
    </head>
    <body>
        <main>
            <div class="title">
                <h2>Artes Marciales </h2><h1>YUKETO</h1>
            </div>
            <div class="opciones">
                <button class="btn btn-light" onclick="validarPassword()">Soy entrenador</button>
                <a href="{{route('alumno.index')}}"><button class='btn btn-primary'>Soy alumno</button></a>
            </div>
        </main>
    </body>
    <script>
        function validarPassword(){
            let password = prompt('Ingresa la contraseña para poder ingresar');
            console.log(password);
            if(password === 'entrenadorarturo'){
                window.location.href = "{{route('entrenador.index')}}"
            }else{
                alert('Contraseña incorrecta');
            }
        }
    </script>
    </html>
@endsection
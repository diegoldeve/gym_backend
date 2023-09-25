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
            }
            
        </style>
    </head>
    <body>
        <main>
            <div class="title">
                <h2>Artes Marciales</h2>
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
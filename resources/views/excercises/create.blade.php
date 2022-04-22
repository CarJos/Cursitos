@extends('layouts.app')
@section('titulo', 'Crear curso' )
@section('contenido')
        <br>
        <br>
        <h3>Creación de nuevo curso</h3>
        <form action="/excercises" method="POST">
        @csrf
        <div class="form-group">    
            <label for="nombre">Ingrese el nombre del curso</label>
            <input id= "nombre" class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">    
            <label for="desc">Ingrese una descripción del curso</label>
            <input id= "desc" class="form-control" type="text" name="descripcion">
        </div>
        <button class="btn btn-dark" type="submit">Crear curso</button>
        </form>
@endsection
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br>
        <h3>Creación de nuevo curso</h3>
        <form action="" method="POST">
        <div class="form-group">    
            <label for="nombre">Ingrese el nombre del curso</label>
            <input id= "nombre" class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">    
            <label for="desc">Ingrese una descripción del curso</label>
            <input id= "desc" class="form-control" type="text" name="descripcion">
        </div>
        <button class="btn btn-dark" type="submit">Crear curso</button>
        </form>
    </div>
</body>
</html> -->
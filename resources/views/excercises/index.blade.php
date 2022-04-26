@extends('layouts.app')
@section('titulo', 'Listado cursos')
@section('contenido')
<br>
<br>
<h3>Listado de cursos</h3>
<div class="row">
    @foreach($curso as $alias)
        <div class="col-lg">
            <br>
            <div class="card text-center" style="width: 18rem;">
                <img style="height:200px" src="{{ Storage::url($alias->imagen) }}" class="card-img-top mx-auto" alt="Imagen del curso" >
                <div class="card-body">
                    <h5 class="card-title">{{$alias->nombre}}</h5>
                    <p class="card-text">{{$alias->descripcion}}</p>
                    <a href="#" class="btn btn-primary btn-dark">Ingrese al curso de {{$alias->nombre}}</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
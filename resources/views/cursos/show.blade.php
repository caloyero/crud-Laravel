@extends('layouts.plantilla')

@section('title','Cursos '.$curso->name)

@section('content')
    <h1>Bienvenodo al curso: {{$curso->name}} </h1>
    <a href="{{route('cursos.edit',$curso)}}">Editar Curso</a>

    <p><strong>Categoria: </strong>{{$curso->categoria}}</p>

    <p><strong>Descripcin del Curso: </strong>{{$curso->description}}</p>

    <form action ="{{route('cursos.destroy',$curso)}}" method ="POST">
        @csrf
        @method('delete')
        <button type="submit">Borrar</button>
    </form><!-- como estamos enviando por medio del metodo delete y no por
    el metodo post o get esta es la forma de hacerlo-->


    <a href="{{route('cursos.index')}}">Volver</a>
@endsection 

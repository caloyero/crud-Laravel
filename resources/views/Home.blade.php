@extends('layouts.plantilla')

@section('title','Home')

@section('content')
<h1>Bienvenido a la pagina principal :)</h1>
<a href="{{route('cursos.index')}}"> Cursos</a><br>
<a href="{{route('products.index')}}">Productos1</a><br>
<a href="{{route('productos.index')}}">Productos2</a>
@endsection

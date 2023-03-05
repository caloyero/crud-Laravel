@extends('layouts.plantilla')

@section('title','Cursos create')

@section('content')
       <h1>En esta Pagina puedes crear un curso</h1>
       <form action ="{{route('cursos.store')}}" method="POST">
              @csrf
              <label >
                     Nombre: 
                     <input type="text" name ="name" value ="{{old('name')}}"><!--el metodo old('') sirve oara mostrar lo ultima que ingreso el usuario 
                     y que no se pierda el registro-->
              </label><br>
              @error('name')
                     <br>
                     <small>*{{$message}}</small>
                     <br>
              @enderror
              <label >
                     Descripcion: 
                     <textarea  name ="description" row ="5">{{old('description')}}</textarea>
              </label><br>
              @error('description')
                     <br>
                     <small>*{{$message}}</small>
                     <br>
              @enderror
              <label >
                     Categoria: 
                     <input type="text" name ="categoria" value ="{{old('categoria')}}">
              </label>
              @error('categoria')<!--esta funcion es para imprimir un mesaje de error 
                     en la validacion -->
                     <br>
                     <small>*{{$message}}</small> 
              
                     <br>
              @enderror<br>
              <button type="submit">Enviar</button>
       </form>
@endsection 

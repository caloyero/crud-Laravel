@extends('layouts.plantilla')

@section('title','Cursos edit')

@section('content')
        <h1>En esta Pagina puedes editar un curso</h1>
        <form action ="{{route('cursos.update',$curso)}}" method="POST">
                @csrf
                @method('put')
                <label >
                        Nombre: 
                        <input type="text" name ="name" value="{{old('name'),$curso->name}}">
                </label><br><!--el metotodo ald()tambien permite utilizar otro recursos junto a el 
                de esta manera podemas guarsar el registro que acabamos de editar o el registro que ya teniamos-->
                @error('name')
                <br>
                <small>*{{$message}}</small>
                <br>
                @enderror
                <label >
                        Descripcion: 
                        <textarea  name ="description" row ="5">{{old('description'),$curso->description}}</textarea>
                </label><br>
                @error('description')
                <br>
                <small>*{{$message}}</small>
                <br>
                @enderror
                <label >
                        Categoria: 
                        <input type="text" name ="categoria" value="{{old('categoria'),$curso->categoria}}">
                </label><br>
                @error('categoria')
                <br>
                <small>*{{$message}}</small>
                <br>
                @enderror
                <button type="submit">Actualizar</button>
        </form>
@endsection 
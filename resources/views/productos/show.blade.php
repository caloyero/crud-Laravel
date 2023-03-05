@extends('products.layout')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <h1>
            Producto : {{$producto->nombre}}
        </h1>
    </div>
</div>
<div class="contenedor">
    <div class="#">
        <div class="form-group">
            <div class="pull-left">
            <img src="/imagen/{{$producto->imagen}}" width="350px">
            <div>
        </div>
    
    </div>
    <div class="pull-right">
        <ul><li><h2><strong>ID : </strong>{{$producto->id}}</h2></li>
            <li><h2><strong>CODIGO : </strong>{{$producto->codigo}}</h2></li>
            <li><h2><strong>DESCRIPCION : </strong>{{$producto->descripcion}}</h2></li>
            <li><h2><strong>PRECIO $ : </strong>{{$producto->precio}}</h2></li>
            <li><h2><strong>ESTADO : </strong>{{$producto->estado}}</h2></li>
            <li><h2><strong>CANTIDAD : </strong>{{$producto->cantidadproducto}}</h2></li>
            <li><h2><strong>GARANTIA : </strong>{{$producto->garantia}}</h2></li>
            <li><h2><strong>MESES DE GARANTIA : </strong>{{$producto->tiempogarantia}}</h2></li>
        </ul>
        <a class= "btn btn-primary" href="{{route('productos.index')}}">Volver</a>
    </div>
</div>


@endsection
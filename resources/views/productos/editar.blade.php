@extends('products.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Producto</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Volver</a>
        </div>
    </div>
</div>
     

     
<form action="{{ route('productos.update',$producto->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
          <strong>Codigo:</strong>
          <input type="text" name="codigo" class="form-control" value="{{$producto->codigo}}" placeholder="Codigo">
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Nombre:</strong>
        <input type="text" name="nombre" class="form-control" value="{{$producto->nombre}}"placeholder="Nombre">
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Descripcion:</strong>
        <textarea class="form-control" style="height:150px" name="descripcion" placeholder="Descripcion">{{$producto->descripcion}}</textarea>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Imagen:</strong>
        <input type="file" name="imagen" class="form-control" placeholder="imagen">
        <img src="/imagen/{{$producto->imagen}}" width="200px">
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
          <strong>Precio:</strong>
          <input type="text" name="precio" class="form-control" value="{{$producto->precio}}" placeholder="Precio">
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
          <strong>Estado:</strong>
          <input type="text" name="estado" class="form-control" value="{{$producto->estado}}" placeholder="Estado">
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Stock:</strong>
        <input type="text" name="cantidadproducto" class="form-control" value="{{$producto->cantidadproducto}}" placeholder="Stock">
      </div>
    </div>  
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
          <strong>Garantia:</strong>
          <input type="text" name="garantia" class="form-control" value="{{$producto->garantia}}" placeholder="Garantia">
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Tiempo de Garantia:</strong>
        <input type="text" name="tiempogarantia" class="form-control" value="{{$producto->tiempogarantia}}" placeholder="Tiempo de Garantia">
      </div>
    </div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
</div>
</form>
@endsection
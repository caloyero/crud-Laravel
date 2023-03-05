
@extends('products.layout')
    
@section('content')

    <h1>Productos</h1>
    <a  class="btn btn" style="background-color: rgb(120, 164, 190)" href="{{route('home')}}" role="button">Home</a>
    <div class="pull-right">
        <a name="" id="" class="btn btn-success" href="{{route('productos.create')}}" role="button">Crear Producto</a>
    </div>
   
    
    <table class="table table-bordered"">
        <thead>
            <tr>
                <th>Id</th>
                <th>Codigo</th>
                <th>Nombre</th>
                <th width="220px">Imagen</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>stock</th>
                <th>Garantia</th>
                <th>Tiempo de Garantia</th>
                <th>Acciones</th>
            </tr>
            @foreach ($productos as $p)
        </tbody>
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->codigo}}</td>
            <td>{{$p->nombre}}</td>
            <td>
                <img src="imagen/{{ $p->imagen }}" width="200px">
                <a class="detalle" href="{{route('productos.show',$p->id)}}">Ver Producto</a>

            </td>
            <td>{{$p->descripcion}}</td>
            <td>{{$p->precio}}</td>
            <td>{{$p->estado}}</td>
            <td>{{$p->cantidadproducto}}</td>
            <td>{{$p->garantia}}</td>
            <td>{{$p->tiempogarantia}}</td>
            <td>
                <form class="eliminar" action="{{route('productos.destroy',$p->id)}}" method="POST">
                    
                    <a  class="btn btn-primary" href="{{route('productos.edit',$p->id)}}" role="button">Editar</a>
                    @csrf
                    @method('DELETE')
                        <BUTTON class="btn btn-danger" type="submit">Eliminar</BUTTON>
            </td>
                <div>
                    
                    </form>
                    
                </div>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $productos->links() !!}

@endsection
@section('js')

<script type="text/javascript">

    $('.detalle').click(function(de){
        de.preventDefault();
        Swal.fire('Detalle de Productos')
        
    
});
    $('.eliminar').submit(function(e){
        e.preventDefault();
        Swal.fire({
        title: 'Estas seguro de Eliminar este Producto?',
        text: "!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Eliminar Producto!'
        }).then((result) => {
        if (result.isConfirmed) {
            this.submit();
  }
})
    })

</script>
@endsection

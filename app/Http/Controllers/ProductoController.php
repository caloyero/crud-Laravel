<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Http\Requests\StoreProductos;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
   
     */
    public function index()
    {
        $productos = Productos::paginate(5);
        return view('productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     
     */
    public function create()
    {
        return view('productos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * 
     */
    public function store(Request $request)
    {
    
       // $producto =Productos::create($request->all());

        $request->validate([
            'codigo'=> 'required',
            'nombre' => 'required',
            'descripcion'=> 'required',
            'precio' => 'required',
            'estado' => 'required',
            'cantidadproducto'=> 'required',
            'garantia'=> 'required',
            'tiempogarantia'=> 'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg,jfif|max:2048',
        ]);
        
        $salidaimagen =$request->all();

        if($imagen=$request->file('imagen'))
        {
            $rutaGuardarImg = 'imagen/';
            $imagenProducto = date('YmdHis'). "." .$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $salidaimagen['imagen'] = "$imagenProducto";
        }

        Productos::create($salidaimagen);

        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * 
     */
    public function show(Productos $producto)
    {
        return view('productos.show',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     */
    public function edit(Productos $producto)
    {
        return view('productos.editar',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
  
     */
    public function update(Request $request, Productos $producto)
    {
        $request->validate([
            'codigo'=> 'required',
            'nombre' => 'required',
            'descripcion'=> 'required',
            'precio' => 'required',
            'estado' => 'required',
            'cantidadproducto'=> 'required',
            'garantia'=> 'required',
            'tiempogarantia'=> 'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg,jfif|max:2048',
        ]);
        
        $salidaimagen =$request->all();

        if($imagen=$request->file('imagen'))
        {
            $rutaGuardarImg = 'imagen/';
            $imagenProducto = date('YmdHis'). "." .$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $salidaimagen['imagen'] = "$imagenProducto";
        }else{
            unset($salidaimagen['imagen']);
        }

        $producto->update($salidaimagen);

        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
    
     */
    public function destroy(Productos $producto)
    {
        
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
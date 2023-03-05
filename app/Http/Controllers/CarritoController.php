<?php

namespace App\Http\Controllers\admin;
//este namespace es para mi seccion de administrador pueden prescindir de el 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Darryldecode\Cart\Cart; //instanciamos cart
use App\Models\admin\producto;//modelos productos

class CarritoController extends Controller
{
    public function add(Request $request)
    {
 //$producto = producto::get('nombre');
 //return  $request->get('producto_id');
  //return  $request->get('_token');

        $userId = $request->get('_token'); // Aqui va la id o token para identificar a quien pertenece el carrito

        $producto = producto::find($request->get('producto_id'));
        //Seleccionamos el producto mediante su id
            //return "$producto->nombre";

//return "el carrito contiene un $name identificado como $id que vale $price por una cantidad de $qty";

        $customAttributes = $producto->urlfoto;

if($request->cantidad != '')//comprobamos si el request viene vacio y en caso contrario agregamos el objeto al carrito
{
        \Cart::add(

        $producto->id,
        $producto->nombre,
        $producto->precio,
        $request->cantidad,
        $customAttributes,
        $producto);

      // var_dump($item);
      //$items = \Cart::getContent();

       return back()->with('success', "$producto->nombre; se ha agregado al carrito");
        }
        else{

            return back()->with('alert', "tiene que agregar al menos 1 item al carrito");
        }

}
//Mostramos el carrito
        public function show()

        {

            $params = [

                'title' =>'Carrito de compras',
            ];

           return view('admin.ChecarCarrito')->with($params);
           }

           //Eliminamos un item del carrito
public function removeitem(Request $request)

           {

            $producto = producto::find($request->get('producto_id'));

            \Cart::remove($producto->id);

            return back()->with('success', "$producto->nombre; se ha eliminado del  carrito");

              }

//Limpiamos el carrito
       public function clear()

       {
        //$userId = $request->get('_token'); // Aqui va la id o token para identificar a quien pertenece el carrito
         // en ese caso debemos usar session($userId)-clear()
        \Cart::clear();

  //return "$userId ";
        return back()->with('success', " se ha limpiado el carrito");

       }


}
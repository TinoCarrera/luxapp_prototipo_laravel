<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use Cart;
use Auth;

class CarritoController extends Controller
{
    public function agregar(Request $request){
        $producto = Productos::find($request->id);
        Cart::add(
            $producto->id,
            $producto->nombre,
            $producto->precio,
            $request->quantity,
            array("unidad"=>$producto->unidad)
        );
        return back()->with('success'," Se ha agregado al carrito de compras " );
    }

    public function checkout(){
        return view('front.checkout');
    }

    public function remover(Request $request){
        $producto = Productos::find($request->id);
        Cart::remove(['id'=>$request->id]);
        return back()->with('success'," Producto eliminado " );
    }

    public function vaciar(){
        Cart::clear();
        return back()->with('success'," Carrito vaciado " );
    }
}

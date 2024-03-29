<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portadas;
use App\Productos;
use App\Categorias;
use App\Subcategorias;
use App\Publicaciones;

class FrontController extends Controller
{
    public function index(){

        $portadas = Portadas::all();
        $productos = Productos::orderBy('visitas','desc')->take(3)->get(['slug','nombre','precio','urlfoto']);
        return view('welcome',compact('portadas','productos'));
    }

    public function categoria($categoria){

        $categoria = Categorias::whereSlug($categoria)->first();
        $productos = Productos::whereHas('subcategorias.categorias',function($query) use ($categoria){
            $query->where('id',$categoria->id);
        })->get();
        return view('front.categoria',compact('categoria','productos'));
    }

    public function subcategoria($categoria,$subcategoria){

        $subcategoria = Subcategorias::whereSlug($subcategoria)->first();
        return view('front.subcategoria',compact('subcategoria'));
    }

    public function producto($producto){

        $producto = Productos::whereSlug($producto)->first();
        $producto->increment('visitas');
        $relacionado = Productos::whereSubcategorias_id($producto->subcategorias_id)->get();
        return view('front.producto',compact('producto','relacionado'));
    }

    public function publicacion($slug){

        $publicacion = Publicaciones::whereSlug($slug)->first();
        $publicacion->increment('visitas');
        return view('front.publicacion',compact('publicacion'));
    }

}

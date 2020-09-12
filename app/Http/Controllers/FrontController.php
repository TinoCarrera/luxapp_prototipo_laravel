<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portadas;
use App\Productos;

class FrontController extends Controller
{
    public function index(){

        $portadas = Portadas::all();
        $productos = Productos::orderBy('visitas','desc')->take(3)->get(['slug','nombre','precio','urlfoto']);
        return view('welcome',compact('portadas','productos'));
    }
}

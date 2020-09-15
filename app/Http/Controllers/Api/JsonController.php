<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Productos;

class JsonController extends Controller
{
    public function enviarproductos(){
        $productos = Productos::all(['nombre']);
        return response()->json($productos,200);
    }
    
    public function recibirpedido(Request $request){
        if(!empty($request)):
            //
            // Procesar y guardar en la BD 
            // 
            $data = ['success' => true];
            return response()->json($data,200);
        else:
            $data = ['success' => false];
            return response()->json($data,200);
        endif;
    }
}

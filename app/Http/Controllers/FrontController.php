<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portadas;

class FrontController extends Controller
{
    public function index(){

        $portadas = Portadas::all();
        return view('welcome',compact('portadas'));
    }
}

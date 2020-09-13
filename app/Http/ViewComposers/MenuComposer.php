<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Categorias;
use App\Publicaciones;

class MenuComposer
{

    public function compose(View $view)
    {
        $menu = Categorias::wherePortada(1)->get(['slug','nombre']);
        $blog = Publicaciones::get(['slug','nombre','description','urlfoto','visitas','created_at']);
        $view->with('menu',$menu)->with('blog',$blog);
    }

}
<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Categorias;

class MenuComposer
{

    public function compose(View $view)
    {
        $menu = Categorias::wherePortada(1)->get(['slug','nombre']);
        $view->with('menu',$menu);
    }

}
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Cart;

class ViewComposerServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        View::composer(['*'],'App\Http\ViewComposers\MenuComposer');
        View::composer('front.estado',function ($view){
            $view->with('carritoCount',Cart::getContent()->count());
        });
        View::composer('front.resumen',function ($view){
            $view->with('carritoCount',Cart::getContent()->count());
        });
    }
}

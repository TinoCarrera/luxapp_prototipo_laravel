<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'slug', 'title', 'description', 'nombre', 'descripcion', 'urlfoto', 'visitas','orden','portada' 
    ];

    public function subcategorias(){
        return $this->hasMany("App\Subcategorias");
    }

    public function publicaciones(){
        return $this->hasMany("App\Publicaciones");
    }
}

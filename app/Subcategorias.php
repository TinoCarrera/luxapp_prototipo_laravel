<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategorias extends Model
{
    protected $fillable = [
        'slug', 'title', 'description', 'nombre', 'descripcion', 'urlfoto', 'visitas','orden','categorias_id'
    ];

    public function categorias(){
        return $this->belongsTo("App\Categorias");
    }

    public function productos(){
        return $this->hasMany("App\Productos");
    }
}

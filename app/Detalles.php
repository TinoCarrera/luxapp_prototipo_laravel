<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalles extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'cantidad', 'productos_id', 'pedidos_id'
    ];

    public function pedidos(){
        return $this->belongsTo("App\Pedidos");
    }

    public function productos(){
        return $this->belongsTo("App\Productos");
    }

}

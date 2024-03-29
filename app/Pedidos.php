<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $fillable = [
        'codigo', 'subtotal', 'impuesto', 'total','estado','user_id'
    ];

    public function user(){
        return $this->belongsTo("App\User");
    }

    public function detalles(){
        return $this->hasMany("App\Detalles");
    }
}

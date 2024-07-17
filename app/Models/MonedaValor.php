<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonedaValor extends Model
{
    use HasFactory;
    protected $table = "valor_tipo_cambios";
    public $timestamps = false;

    public function moneda(){
        return $this->belongsTo(Moneda::class,'tipo_cambio_id','id');
    }
}

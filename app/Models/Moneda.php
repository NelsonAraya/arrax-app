<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    use HasFactory;
    protected $table = "tipo_cambios";
    public $timestamps = false;

    public function valores(){
        return $this->hasMany(MonedaValor::class,'tipo_cambio_id','id');
    }
}

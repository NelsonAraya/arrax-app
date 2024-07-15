<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fondo extends Model
{
    use HasFactory;
    protected $table = "fondos";
    public $timestamps = false;

    public function departamento(){
        return $this->belongsTo(Departamento::class,'departamento_id','id');
    }
}

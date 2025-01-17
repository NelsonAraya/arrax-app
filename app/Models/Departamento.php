<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $table = "departamentos";
    public $timestamps = false;

    public function fondos(){
        return $this->hasMany(Fondo::class,'departamento_id','id');
    }
}

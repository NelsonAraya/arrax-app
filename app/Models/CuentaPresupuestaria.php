<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaPresupuestaria extends Model
{
    use HasFactory;
    protected $table = "cuentas_presupuestarias";
    public $timestamps = false;
}

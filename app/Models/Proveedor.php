<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $table = "proveedores";
    public $timestamps = false;

    public function runCompleto() {
        return number_format($this->id, 0,'.','.') . '-' . $this->dv;
      }
}

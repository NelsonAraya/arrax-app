<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BancoCuentaTipo extends Model
{
    use HasFactory;
    protected $table = "banco_cuenta_tipos";
    public $timestamps = false;
}

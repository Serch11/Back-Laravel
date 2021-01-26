<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    protected $fillable = ["nombres","apellidos","correo","telefono"];
}

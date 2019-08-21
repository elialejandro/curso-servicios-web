<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    protected $fillable = [
        'contacto_id', 'telefono', 'tipo',
    ];
}

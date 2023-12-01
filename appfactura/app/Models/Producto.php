<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';

    protected $primaryKey = ['codigo', 'nombre'];

    public $incrementing = false;

    protected $fillable = [
        'codigo', 'nombre', 'precio', 'precioMasIva', 'descripcion', 'porcentajeIva'
    ];

    public $timestamps = false;
}

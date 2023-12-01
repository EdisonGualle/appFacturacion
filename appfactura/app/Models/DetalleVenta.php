<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table = 'detalle_venta';

    protected $primaryKey = 'id'; // Assuming 'id' is the primary key

    protected $fillable = [
        'id', 'num_factura', 'codigo_producto', 'cantidad', 'precio_unitario', 'subtotal',
    ];

    public $timestamps = false;
}

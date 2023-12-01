<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'factura';

    protected $primaryKey = 'num_factura';

    public $incrementing = false;

    protected $fillable = [
        'num_factura', 'fechaEmision', 'fechaAutorizacion', 'acutorizacionSRI', 'guiaRemision', 'formaPago', 'cliente', 'emisor',
    ];

    public $timestamps = false;
}

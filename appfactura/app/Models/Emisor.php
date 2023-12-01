<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emisor extends Model
{
    protected $table = 'Emisor';

    protected $primaryKey = 'cedulaRuc';

    public $incrementing = false;

    protected $fillable = [
        'cedulaRuc', 'nombreComercial', 'razonSocial', 'email', 'telefono', 'direccion',
    ];

    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormasPago extends Model
{
    protected $table = 'FormasPago';

    protected $primaryKey = 'idFormasPago';

    public $incrementing = false;

    protected $fillable = [
        'idFormasPago', 'nombre',
    ];

    public $timestamps = false;
}

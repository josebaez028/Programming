<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registro extends Model
{
    use SoftDeletes;

    public $table = 'registros';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'hora',
        'fecha',
        'origen',
        'codigo',
        'destino',
        'duracion',
        'created_at',
        'updated_at',
        'deleted_at',
        'fecha_larga',
    ];
}

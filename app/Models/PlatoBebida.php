<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlatoBebida extends Model
{
    use HasFactory;
    protected $table = 'plato_bebida';
    protected $primaryKey = 'id_plato_bebida';
    public $timestamps = false;
    protected $fillable = [
        'id_gastronomia',
        'nombre_plato_bebida',
        'precio',
        'ingredientes',
        'descripcion_plato',
        'oferta',
        'imagen',
        'tipo_plato_bebida',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_negocio',
        'titulo_pub',
        'descripcion_pub',
        'fecha_pub',
        'imagen_pub',
        'id_admin_hab',
    ];
}

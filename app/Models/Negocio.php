<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    use HasFactory;
    protected $table = 'negocio';
    protected $primaryKey = 'id_negocio';
    public $timestamps = false;
    protected $fillable = [
        'id_gerente',
        'nombre_negocio',
        'descripcion_negocio',
        'nit',
        'email_negocio',
        'telefono',
        'celular',
        'logotipo',
        'id_tipo_negocio',
        'id_ubicacion',
        'id_user_validate',
    ];
}

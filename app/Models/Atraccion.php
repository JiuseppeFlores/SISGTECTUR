<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atraccion extends Model
{
    use HasFactory;
    protected $table = 'atraccion';
    protected $primaryKey = 'id_servicio';
    public $timestamps = false;
    protected $fillable = [
        'nombre_lugar',
        'id_ubicacion',
        'foto_lugar',
    ];
}

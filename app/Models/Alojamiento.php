<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alojamiento extends Model
{
    use HasFactory;
    protected $table = 'alojamiento';
    protected $primaryKey = 'id_servicio';
    public $timestamps = false;
    protected $fillable = [
        'nombre_aloj',
        'categoria',
        'num_hab_indiv',
        'num_hab_dob',
    ];


}

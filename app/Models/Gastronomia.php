<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gastronomia extends Model
{
    use HasFactory;
    protected $table = 'gastronomia';
    protected $primaryKey = 'id_servicio';
    public $timestamps = false;
    protected $fillable = [
        'tipo_menu',
    ];
}

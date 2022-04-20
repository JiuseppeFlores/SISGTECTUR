<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    use HasFactory;
    protected $table = 'business';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'description',
        'nit',
        'email',
        'phone',
        'cellphone',
        'logo',
        'business_type_id',
        'location_id',
        'super_user_validate_id',
        'state',
    ];
}

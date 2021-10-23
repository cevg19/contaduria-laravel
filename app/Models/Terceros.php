<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terceros extends Model
{

    use HasFactory;

    protected $fillable = [
        'identificacion', 'tipo_doc', 'dv', 'nombre', 'nombre2', 'apellido', 'apellido2',
        'razon_social', 'nombre_comercial', 'direccion', 'telefono', 'movil', 'email', 'ciudad', 'grupo', 'zona', 'genero', 'fecha_nacimiento',
        'nombre_corto', 'vendedor', 'tipo_nomina', 'rut', 'activo'
    ];

    public function scopeIdentificacion($query, $identificacion)
    {
        if ($identificacion)
            return $query->orwhere('identificacion', 'LIKE', "%$identificacion%");
    }
    public function scopeCiudad($query, $ciudad)
    {
        if ($ciudad)
            return $query->orwhere('ciudad', 'LIKE', "%$ciudad%");
    }
    public function scopeActivo($query, $activo)
    {
        if ($activo)
            return $query->orwhere('activo', 'LIKE', "%$activo%");
    }
}

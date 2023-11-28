<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuariooperador extends Model
{
    public $fillable = [
        'dea_gps',
        'dea_fecha',
        'dea_documentopersonalcertificado',
        'dea_nombresapellidospersonalcertificado',
        'dea_entidadcertificadora',
        'dea_fechacertificacion',
        'dea_firma',
        'dea_ciudadpersonal',
        'dea_fechapersonal',
    ];
    use HasFactory;
}

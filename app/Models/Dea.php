<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dea extends Model
{
    public $fillable = [
  'dea_nombrecompleto',
  'dea_docidentificacion',
  'dea_cantidad',
  'dea_nombreubicacion',
  'dea_direccionubicacion',
  'dea_codigopostal',
  'dea_ciudadmunicipio',
  'dea_departamento',
  'dea_tipoinstalacion',
  'dea_tipodeclaracion',
  'dea_tipoespacio',
  'dea_numserie',
  'dea_modelo',
  'dea_marca',
  'dea_importadordistribuidor',
  'dea_desclugarubicacion',
  'dea_gps',
  'dea_fecha',
  'dea_documentopersonalcertificado',
  'dea_nombresapellidospersonalcertificado',
  'dea_entidadcertificadora',
  'dea_fechacertificacion',
  'dea_firma',
  'dea_ciudadpersonal',
  'dea_fechapersonal'
    ];
    use HasFactory;
}

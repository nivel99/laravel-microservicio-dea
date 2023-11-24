<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("dea_nombrecompleto")->nullable();
            $table->string("dea_nombreubicacion")->nullable();
            $table->string("dea_direccionubicacion")->nullable();
            $table->string("dea_codigopostal")->nullable();
            $table->string("dea_ciudadmunicipio")->nullable();
            $table->string("dea_departamento")->nullable();
            $table->string("dea_tipoinstalacion")->nullable();
            $table->string("dea_tipodeclaracion")->nullable();
            $table->string("dea_tipoespacio")->nullable();
            $table->string("dea_numserie")->nullable();
            $table->string("dea_modelo")->nullable();
            $table->string("dea_marca")->nullable();
            $table->string("dea_importadordistribuidor")->nullable();
            $table->string("dea_desclugarubicacion")->nullable();
            $table->string("dea_gps")->nullable();
            $table->string("dea_otros")->nullable();
            $table->date("dea_fecha");
            $table->integer("dea_documentopersonalcertificado");
            $table->string("dea_nombresapellidospersonalcertificado")->nullable();
            $table->string("dea_entidadcertificadora")->nullable();
            $table->date("dea_fechacertificacion");
            $table->string("dea_firma")->nullable();
            $table->string("dea_ciudadpersonal")->nullable();
            $table->date("dea_fechapersonal");
            $table->integer("dea_cantidad");
            $table->integer("dea_docidentificacion");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deas');
    }
}

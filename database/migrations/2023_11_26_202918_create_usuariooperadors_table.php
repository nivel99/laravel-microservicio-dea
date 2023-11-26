<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariooperadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuariooperadors', function (Blueprint $table) {
            $table->id();
            $table->string('dea_gps')->nullable();
            $table->string('dea_fecha')->nullable();
            $table->string('dea_documentopersonalcertificado')->nullable();
            $table->string('dea_nombresapellidospersonalcertificado')->nullable();
            $table->string('dea_entidadcertificadora')->nullable();
            $table->string('dea_fechacertificacion')->nullable();
            $table->string('dea_firma')->nullable();
            $table->string('dea_ciudadpersonal')->nullable();
            $table->string('dea_fechapersonal')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuariooperadors');
    }
}

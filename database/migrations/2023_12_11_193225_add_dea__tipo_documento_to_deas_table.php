<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeaTipoDocumentoToDeasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('deas', function (Blueprint $table) {
            //
            $table->string('dea_TipoDocumento')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deas', function (Blueprint $table) {
            //
            $table->dropColumn('dea_TipoDocumento');
        });
    }
}

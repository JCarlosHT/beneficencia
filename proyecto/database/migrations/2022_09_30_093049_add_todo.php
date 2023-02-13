<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTodo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('solicitudes', function (Blueprint $table) {
            $table->String('evaluacion');
            $table->String('diagnostico');
            $table->String('tiempo_trata');
            $table->String('otra_insti');
            $table->String('plan_accion');
            $table->unsignedBigInteger('id_beneficiario');
            $table->foreign('id_beneficiario')->references('id')->on('beneficiarios');
            $table->unsignedBigInteger('id_apoyo');
            $table->foreign('id_apoyo')->references('id')->on('apoyos');
            $table->unsignedBigInteger('id_ocupacion');
            $table->foreign('id_ocupacion')->references('id')->on('cat_ocupaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('solicitudes', function (Blueprint $table) {
            //
        });
    }
}

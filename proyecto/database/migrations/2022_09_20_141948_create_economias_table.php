<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEconomiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('economias', function (Blueprint $table) {
            $table->id();
            $table->Integer('alimentacion');
            $table->Integer('salud');
            $table->Integer('luz');
            $table->Integer('agua');
            $table->Integer('telefono');
            $table->Integer('gas');
            $table->Integer('gasolina');
            $table->Integer('ropa');
            $table->Integer('vivienda');
            $table->Integer('educacion');
            $table->Integer('servicios');
            $table->Integer('transporte');
            $table->Integer('renta');
            $table->Integer('otro');
            $table->unsignedBigInteger('id_beneficiario');
            $table->foreign('id_beneficiario')->references('id')->on('beneficiarios');
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
        Schema::dropIfExists('economias');
    }
}

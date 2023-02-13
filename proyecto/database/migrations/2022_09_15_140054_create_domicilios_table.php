<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios', function (Blueprint $table) {
            $table->id();
            $table->Integer('cp');
            $table->Integer('municipio');
            $table->Integer('colonia');
            $table->String('calle');
            $table->String('num_int');
            $table->String('num_ext');
            $table->String('zona');
            $table->String('tipo_viv');
            $table->String('regimen');
            $table->String('serv_pub');
            $table->String('serv_viv');
            $table->Integer('total_espa');
            $table->Integer('sala');
            $table->Integer('comedor');
            $table->Integer('recamara');
            $table->Integer('cocina');
            $table->Integer('banio');
            $table->Integer('otro_espa');
            $table->Integer('paredes');
            $table->Integer('techo');
            $table->Integer('piso');
            $table->String('referencia',255);
            $table->String('recado',255);
            $table->Integer('material');
            $table->Integer('num_dormitorio');
            $table->Integer('per_dormitorio');
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
        Schema::dropIfExists('domicilios');
    }
}

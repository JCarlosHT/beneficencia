<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsables', function (Blueprint $table) {
            $table->id();
            $table->String('nombre');
            $table->String('primer_ape');
            $table->String('segundo_ape');
            $table->String('parentesco');
            $table->Integer('cp');
            $table->String('num_int');
            $table->String('referencias');
            $table->String('num_ext');
            $table->String('calle');
            $table->String('col');
            $table->Integer('mun');
            $table->Integer('telefono');
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
        Schema::dropIfExists('responsables');
    }
}

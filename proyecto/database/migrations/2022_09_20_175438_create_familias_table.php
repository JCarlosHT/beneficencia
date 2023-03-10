<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->Integer('edad');
            $table->String('parentesco');
            $table->String('ocupacion');
            $table->float('ingreso');
            $table->Integer('total');
            $table->Integer('ingresos');        
            $table->String('escolaridad');
            $table->Integer('enfermos');
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
        Schema::dropIfExists('familias');
    }
}

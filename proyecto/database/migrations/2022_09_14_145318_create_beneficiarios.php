<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiarios', function (Blueprint $table) {
            $table->id();
            $table->String('nombre',25);
            $table->String('primer_ape',25);
            $table->String('segundo_ape',25);
            $table->Integer('telefono');
            $table->String('calle',75);
            $table->String('sexo');
            $table->date('fec_nac');
            $table->String('curp');
            $table->String('estado_civil');
            $table->String('escolaridad');
            $table->String('ocupación');
            $table->Integer('ingresos');
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
        Schema::dropIfExists('beneficiarios');
    }
}

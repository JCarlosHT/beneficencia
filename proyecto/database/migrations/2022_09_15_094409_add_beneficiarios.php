<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBeneficiarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('beneficiarios', function (Blueprint $table) {
            $table->String('correo');
            $table->unsignedBigInteger('id_nacionalidad');
            $table->foreign('id_nacionalidad')->references('id')->on('cat_nacionalidades');
            $table->String('religion');
            $table->String('etnia');
            $table->Integer('derechoambiencia');
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
        Schema::table('beneficiarios', function (Blueprint $table) {
            //
        });
    }
}

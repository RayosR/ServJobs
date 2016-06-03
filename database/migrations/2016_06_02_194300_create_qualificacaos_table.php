<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualificacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualificacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('qualificado');
            $table->integer('qualificacao');
            $table->string('depoimento', 450);
            $table->string('dataServico');
            $table->string('nomeServico');
            $table->integer('idUsuario')-> unsigned();
            $table->foreign('idUsuario')-> references('id') -> on ('usuarios');
            $table->integer('codProfissional')-> unsigned();
            $table->foreign('codProfissional')-> references('cod') -> on ('profissionals');
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
        Schema::drop('qualificacaos');
    }
}

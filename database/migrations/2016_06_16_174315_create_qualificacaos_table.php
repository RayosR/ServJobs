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
        Schema::create('qualificacao', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('qualificado');
			$table->integer('qualificacao');
			$table->String('depoimento',450);
			$table->String('dataServico');
			$table->String('nomeServico');
			$table->integer('idUsuario')-> unsigned();
			$table->foreign('idUsuario')-> references('id') -> on ('usuario');
			$table->integer('codProfissional') -> unsigned();
			$table->foreign('codProfissional') -> references ('codProfissional') -> on ('profissional');
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
        Schema::drop('qualificacao');
    }
}

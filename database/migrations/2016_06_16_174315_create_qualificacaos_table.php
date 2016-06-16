<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualificacaoTable extends Migration
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
			$table->integer('depoimento',450);
			$table->integer('dataServico');
			$table->integer('nomeServico');
			$table->integer('idUsuario')-> unsigned();
			$table->integer('idUsuario')-> references('id') -> on ('usuarios');
			$table->integer('codProfissional') -> unsigned();
			$table->integer('codProfissional') -> references ('codprofissional') -> on ('profissional');
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

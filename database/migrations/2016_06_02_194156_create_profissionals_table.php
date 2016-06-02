<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfissionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profissionals', function (Blueprint $table) {
            $table->increments('id');
            $table->varchar(45)('nome');
			$table->varchar(45)('email');
			$table->varchar(45)('senha');
			$table->int('documento');
			$table->varchar(45)('razaoSocial');
			$table->varchar(1)('sexo');
			$table->varchar(45)('endereco');
			$table->int(10)('telefone');
			$table->int(11)('celular');
			$table->varchar(45)('profissao');
			$table->varchar(45)('registroProfissional');
			$table->int('numeroRegistro');
			$table->varchar(2000)('descricao');
			$table->int('likes');
			$table->int('deslike');
			$table->varchar(45)('link1');
			$table->varchar(45)('link2');
			$table->varchar(45)('link3');
			$table->int('visualisacoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('profissionals');
    }
}

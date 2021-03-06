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
        Schema::create('profissional', function (Blueprint $table) {
            $table->increments('codProfissional');
            $table->string('nome', 45);
            $table->string('email', 45);
            $table->string('senha', 45);
            $table->integer('documento');
            $table->string('razaoSocial', 45);
            $table->string('sexo', 1);
			$table->string('rua', 45);
			$table->string('numeroCasa', 45);
			$table->string('bairro', 45);
			$table->string('complemento', 45);
			$table->string('cep', 45);
            $table->integer('telefone');
            $table->integer('celular');
            $table->string('profissao', 45);
            $table->string('registroProfissional', 45);
            $table->integer('numeroRegistro');
            $table->string('descricao', 2000);
            $table->integer('likes');
            $table->integer('deslike');
            $table->string('link1', 100);
            $table->string('link2', 100);
            $table->string('link3', 100);
            $table->integer('visualizacoes');
			$table->integer('codLocalidade')-> unsigned();
            $table->foreign('codLocalidade')-> references('codLocalidade') -> on ('localidade');
            $table->integer('codProfissao')-> unsigned();
            $table->foreign('codProfissao')-> references('codProfissao') -> on ('profissao');
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
        Schema::drop('profissional');
    }
}

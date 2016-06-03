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
            $table->increments('cod');
           $table->string('nome', 45);
            $table->string('email', 45);
            $table->string('senha', 45);
            $table->integer('documento');
            $table->string('razaoSocial', 45);
            $table->string('sexo', 1);
            $table->string('endereco', 45);
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
            $table->integer('visualisacoes');
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

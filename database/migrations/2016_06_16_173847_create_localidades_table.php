<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localidade', function (Blueprint $table) {
            $table->increments('codLocalidade');
            $table->string('cidade', 45);
			$table->string('estado', 45);
			$table->string('uf', 45);
			$table->string('pais', 45);
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
        Schema::drop('localidade');
    }
}

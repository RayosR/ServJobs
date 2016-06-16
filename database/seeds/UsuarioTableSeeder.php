<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class UsuarioTableSeeder extends Seeder {
	
public function run()
{
	DB::insert('insert into usuarios
	(nome, email, senha, cpf)
	values (?,?,?,?)',
	array('Phelipe', 'phelipe-alvarenga@hotmail.com',
	'123', 16222788698 ));

	DB::insert('insert into usuarios
	(nome, email, senha, cpf)
	values (?,?,?,?)',
	array('Leandro', 'leandro_monjardim@hotmail.com',
	'1234', 16222788699 ));
	
	
}

}
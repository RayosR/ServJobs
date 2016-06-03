<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class ProfissionalTableSeeder extends Seeder {
	
public function run()
{
	DB::insert('insert into profissionals
	(nome, email, senha, documento, razaoSocial, sexo, endereco, telefone, celular, profissao, registroProfissional, numeroRegistro, descricao)	values (?,?,?,?,?,?,?,?,?,?,?,?,?)', array('Gilberto', 'gilbertobino.29@gmail.com', '456', 16222788100, '9pixouls', 'M', 'Av. luciano das neves - centro Vila Velha', 32895046, 992010565, 'Desenvolvedor', 'rg', '678094', 'Formação técnico telecomunicação e técnico em informática'));

	DB::insert('insert into profissionals (nome, email, senha, documento, razaoSocial, sexo, endereco, telefone, celular, profissao, registroProfissional,	 numeroRegistro, descricao) values (?,?,?,?,?,?,?,?,?,?,?,?,?)', array('Neemias', 'neemiaslacerda97@hotmail.com', '789', 16222788111, '9pixouls', 'M', 'Av. luciano das neves - centro Vila Velha', 30394726, 996941552, 'Desenvolvedor', 'rg', '3557990', 'técnico em informática'  ));
	
	
}

}

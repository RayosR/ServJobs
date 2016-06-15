<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class ProfissionalTableSeeder extends Seeder {
	
public function run()
{
	//DB::insert('insert into profissionals
	//(nome, email, senha, documento, razaoSocial, sexo, endereco, telefone, celular, profissao, registroProfissional, numeroRegistro, descricao)	values (?,?,?,?,?,?,?,?,?,?,?,?)', array('Gilberto', 'gilbertobino.29@gmail.com', '456', 16222788100, '9pixouls', 'M', 'Av. luciano das neves - centro Vila Velha', 32895046, 992010565, 'Desenvolvedor', 'rg', '678094', 'Formação técnico telecomunicação e técnico em informática'));

	//DB::insert('insert into profissionals (nome, email, senha, documento, razaoSocial, sexo, endereco, telefone, celular, profissao, registroProfissional,	 numeroRegistro, descricao) values (?,?,?,?,?,?,?,?,?,?,?,?)', array('Neemias', 'neemiaslacerda97@hotmail.com', '789', 16222788111, '9pixouls', 'M', 'Av. luciano das neves - centro Vila Velha', 30394726, 996941552, 'Desenvolvedor', 'rg', '3557990', 'técnico em informática'  ));
	
	  DB::insert('insert into profissionals (nome, email, senha, documento, razaoSocial, sexo, rua, numeroCasa, complemento, cep, cidade, estado, pais, telefone, celular, profissao, registroProfissional, numeroRegistro, descricao) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', array('Ana Clara Poltronieri de Souza', 'anaclarapoltronieri@hotmail.com', 'ana123', '893465670', 'F', 'Av. luciano das neves - centro Vila Velha', '40', 'Próximo Pracinha de Vila Velha', '29107370', 'Vila Velha', 'Espirito Santo', 'Brasil', '33266716', '997279733', 'Desenvolvedor', '666445', '345723', 'Formação em técnico de redes e informática',);
	  DB::insert('insert into profissionals (nome, email, senha, documento, razaoSocial, sexo, rua, numeroCasa, complemento, cep, cidade, estado, pais, telefone, celular, profissao, registroProfissional, numeroRegistro, descricao) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', array('José da Silva', 'josedasilva@hotmail.com', 'jose123', '4578672', 'M', 'Rua Dalia', '5', 'Casa', '29104581', 'Vila Velha', 'Espirito Santo', 'Brasil', '33495883', '99432690', 'Floriculturista', '345712', '23695', 'Formação em jardinagem',);
	
}

}

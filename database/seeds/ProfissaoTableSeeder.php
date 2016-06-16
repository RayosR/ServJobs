<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class ProfissaoTableSeeder extends Seeder {
	
public function run()
{
	DB::insert('insert into profissao (cargo) values (?)', array('Desenvolvedor(a)'));
	DB::insert('insert into profissao (cargo) values (?)', array('Mecânico(a)'));
	DB::insert('insert into profissao (cargo) values (?)', array('Professor(a)'));
	DB::insert('insert into profissao (cargo) values (?)', array('Encanador(a)'));
	DB::insert('insert into profissao (cargo) values (?)', array('Professor(a)'));
	DB::insert('insert into profissao (cargo) values (?)', array('Técnico(a) de Redes'));
	DB::insert('insert into profissao (cargo) values (?)', array('Web Designer'));
	DB::insert('insert into profissao (cargo) values (?)', array('Diarista'));
	DB::insert('insert into profissao (cargo) values (?)', array('Recepcionista'));
	DB::insert('insert into profissao (cargo) values (?)', array('Auxiliar Administrativo'));
	DB::insert('insert into profissao (cargo) values (?)', array('Advogado(a)'));
	
}

}
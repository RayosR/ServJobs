<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class LocalidadeTableSeeder extends Seeder {
	public function run()
	{
	DB::insert('insert into localidade(cidade, estado, uf, pais), values (?,?,?,?)', array('Vila Velha', 'Espirito Santo', 'ES', 'Brasil') );
	DB::insert('insert into localidade(cidade, estado, uf, pais), values (?,?,?,?)', array('Vitoria', 'Espirito Santo', 'ES', 'Brasil') );
	DB::insert('insert into localidade(cidade, estado, uf, pais), values (?,?,?,?)', array('Itabuna', 'Bahia', 'BA', 'Brasil') );
	DB::insert('insert into localidade(cidade, estado, uf, pais), values (?,?,?,?)', array('Macae', 'Rio de Janeiro', 'RJ', 'Brasil') );
	DB::insert('insert into localidade(cidade, estado, uf, pais), values (?,?,?,?)', array('Caruaru', 'Pernambuco', 'PE', 'Brasil') );
	DB::insert('insert into localidade(cidade, estado, uf, pais), values (?,?,?,?)', array('Bom Jesus', 'Piaui', 'PI', 'Brasil') );
	}
}
 <?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class ProfissionalTableSeeder extends Seeder {
	
public function run()
{
	
	  DB::insert('insert into profissionals (nome, email, senha, documento, sexo, rua, numeroCasa, bairro, complemento, cep, telefone, celular, registroProfissional, numeroRegistro, descricao) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', array('Ana Clara Poltronieri de Souza', 'anaclarapoltronieri@hotmail.com', 'ana123', '893465670', 'F', 'Av. luciano das neves', '40',  'centro', 'Próximo Pracinha de Vila Velha', '29107370', '33266716', '997279733', '666445', '345723', 'Formação em técnico de redes e informática'));
	  DB::insert('insert into profissionals (nome, email, senha, documento, sexo, rua, numeroCasa, bairro, complemento, cep, telefone, celular, registroProfissional, numeroRegistro, descricao) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', array('José da Silva', 'josedasilva@hotmail.com', 'jose123', '4578672', 'M', 'Rua Dalia', '5', 'Jardim Colorado', 'Casa', '29104581', '33495883', '99432690', '345712', '23695', 'Formação em jardinagem'));
	  DB::insert('insert into profissionals (nome, email, senha, documento, sexo, rua, numeroCasa, bairro, complemento, cep, telefone, celular, registroProfissional, numeroRegistro, descricao) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', array('Marilza Gomes', 'marilzag@hotmail.com', 'marilza123', '4578672', 'F', 'Rua Madressilva', '20', 'Jardim Asteca', 'Apt.', '29104460', '33657492', '87465122', '45723', '48964', 'Formação em administração'));
	  DB::insert('insert into profissionals (nome, email, senha, documento, sexo, rua, numeroCasa, bairro, complemento, cep, telefone, celular, registroProfissional, numeroRegistro, descricao) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', array('Marco Antônio', 'marcoa@hotmail.com', 'marco123', '4578344', 'M', 'Praça Anita Francisca Crystello', '103', 'Tabuazeiro', 'Casa', '29043528', '3436853', '975435433', '44444', '888888', 'Formação em odontologia'));
	  DB::insert('insert into profissionals (nome, email, senha, documento, sexo, rua, numeroCasa, bairro, complemento, cep, telefone, celular, registroProfissional, numeroRegistro, descricao) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', array('Suelen Oliveira', 'sueleno@hotmail.com', 'suelen123', '5689674', 'F', 'Rua Anníbal Vieira Rabayolli ', '54', 'Mata da Praia', 'APT', '29065240', '33470009', '8643685', '3325666', '334688', 'Formação em nutrição e gastronomia'));
	  DB::insert('insert into profissionals (nome, email, senha, documento, sexo, rua, numeroCasa, bairro, complemento, cep, telefone, celular, registroProfissional, numeroRegistro, descricao) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', array('Renato Araujo', 'renatoa@hotmail.com', 'renato123', '6790754', 'M', 'Rua Antiocho Carneiro de Mendonça ', '09', 'Jardim Camburi', 'APT', '29092130', '33333879', '9742322567', '66686432', '1123578', 'Formação em quimica e biologia'));
	  DB::insert('insert into profissionals (nome, email, senha, documento, sexo, rua, numeroCasa, bairro, complemento, cep, telefone, celular, registroProfissional, numeroRegistro, descricao) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', array('Thais Lopes', 'thaisl@hotmail.com', 'thais123', '789457856', 'F', 'Rua Antônio Abraão ', '6', 'Ilha das Flores', 'Casa', '29115550', '369906534', '888642225', '3332578', '113468', 'Formação em pedagogia e história'));
	  DB::insert('insert into profissionals (nome, email, senha, documento, sexo, rua, numeroCasa, bairro, complemento, cep, telefone, celular, registroProfissional, numeroRegistro, descricao) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', array('Paulo Schneider', 'paulos@hotmail.com', 'paulo123', '468000', 'M', 'Avenida Anderssem Fidalgo Pereira', '99', 'Barra do Jucu	', 'Casa', '29125145', '3346896', '9653521', '335899', '223589', 'Formação em veterinária'));
	  DB::insert('insert into profissionals (nome, email, senha, documento, sexo, rua, numeroCasa, bairro, complemento, cep, telefone, celular, registroProfissional, numeroRegistro, descricao) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', array('Amanda Dutra', 'amandad@hotmail.com', 'amanda123', '9576893', 'F', 'Ladeira Anthero Braído', '334', 'Praia do Suá', 'casa', '29052220', '332689065', '99475224', '24798090', '1248076', 'Formação em web designer e programação html e php'));
	  DB::insert('insert into profissionals (nome, email, senha, documento, sexo, rua, numeroCasa, bairro, complemento, cep, telefone, celular, registroProfissional, numeroRegistro, descricao) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', array('Luis Ferreira', 'luisf@hotmail.com', 'luis123', '1119364', 'M', 'Rua Anita Giovanoti', '11', 'Maria Ortiz', 'APT', '29070493', '2367890', '8876422', '2222222', '33333333', 'Formação em elétrica'));
	  DB::insert('insert into profissionals (nome, email, senha, documento, sexo, rua, numeroCasa, bairro, complemento, cep, telefone, celular, registroProfissional, numeroRegistro, descricao) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', array('Zenilda Carvalho', 'zenildac@hotmail.com', 'zenilda123', '8887655', 'F', 'Rua Antonieta Tatagiba ', '16', 'Jucutuquara', 'Casa', '29040840', '33194321', '98232156', '10213', '542136', 'Formação em Oftalmologista'));

}

}
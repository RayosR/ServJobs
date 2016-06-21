<?php

namespace ServJobs\Http\Controllers;

use Illuminate\Http\Request;

use ServJobs\Http\Requests;

use DB;

use ServJobs\Profissional;

class ProfissionalController extends Controller
{
    
    public function lista(){
		
		$profissional = DB::select('select a.nome, b.cargo, c.cidade, c.uf from profissional a, profissao b, localidade c where a.codLocalidade=c.codLocalidade and a.codProfissao=b.codProfissao');

		
		return view('profissional.listagem')->with('profissional', $profissional);
	}

    public function busca(){

    	$prof = Profissional::all();
		
		return view('profissional.telapesquisa')->withProfissional($prof);
    }

    public function visualizar($id){
		
		$prof = Profissional::find($id);
		if(empty($prof)) {
			return "Usuário não cadastrado";
		}
		return view('profissional.resultadopesquisa')->with('p', $produto);
	}

	public function novo($var){
		if($var==1){
			return view('profissional.formulario');
		} else{

		}
		
	}
}


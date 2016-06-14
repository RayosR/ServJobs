<?php

namespace ServJobs\Http\Controllers;

use Illuminate\Http\Request;

use ServJobs\Http\Requests;

use Requests;

use ServJobs\Profissional;

class ProfissionalController extends Controller
{
    
    public function lista(){
		
		$prof = Profissional::all();
		
		return view('profissional.listagem')->withProfissional($prof);
	}

    public function busca{

    	$prof = Profissional::all();
		
		return view('profissional.telapesquisa')->withProfissional($prof);
    }

    public function mostra($id){
		
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

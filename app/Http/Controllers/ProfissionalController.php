<?php

namespace ServJobs\Http\Controllers;

use Illuminate\Http\Request;

use ServJobs\Http\Requests;

use ServJobs\Profissional;

class ProfissionalController extends Controller
{
    
    public function lista(){
		
		$prof = Profissional::all();
		
		return view('profissional.resultado')->withProfissional($prof);
	}

   // public function busca{

   // 	$prof = Profissional::all();
		
	//	return view('profissional.telapesquisa')->withProfissional($prof);
  //  }

    public function vizualiza($id){
		
		$prof = Profissional::find($id);
		if(empty($prof)) {
			return "Usuário não cadastrado";
		}
		return view('profissional.resultadopesquisa')->with('p', $profissional);
	}

	public function novo($var){
		if($var==1){
			return view('profissional.formulario');
		} else{

		}
		
	}
}

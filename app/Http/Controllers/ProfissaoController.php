<?php

namespace ServJobs\Http\Controllers;

use Illuminate\Http\Request;

use ServJobs\Http\Requests;

use ServJobs\Profissao;

class ProfissaoController extends Controller
{
    public function lista(){
		
		$profissao = Profissao::all();
		
		return $profissao;
	
	}
}

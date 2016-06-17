<?php

namespace ServJobs\Http\Controllers;

use Illuminate\Http\Request;

use ServJobs\Http\Requests;

use ServJobs\Localidade;

class LocalidadeController extends Controller
{
        public function lista(){
		
		$local = Localidade::all();
		
		return $local;
	
	}

}

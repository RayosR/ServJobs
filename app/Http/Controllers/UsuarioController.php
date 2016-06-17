<?php

namespace ServJobs\Http\Controllers;

use Illuminate\Http\Request;

use ServJobs\Http\Requests;

use ServJobs\Usuario;

class UsuarioController extends Controller
{
     public function lista(){
		
		$usuario = Usuario::all();
		
		return $usuario;
	 }
}

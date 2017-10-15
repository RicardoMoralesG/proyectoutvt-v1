<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class formularios extends Controller
{
    public function vformulario(){
		return view ('formulario.formu');
	}

	
}

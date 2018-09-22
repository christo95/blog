<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{
	public function __construct(){
        $this->middleware('example',['except' => ['home']]);
    }

    public function home(){
    	
    	return view('home');
    }

    public function saludos($tNombre='Invitado'){
		$html = '<h2>Contenido HTML</h2>';
		$script = '<script>alert("Inyeccion de Script")</script>';

		$consolas = [
			'Xbox', 
			'Playstation', 
			'Wii', 
			'PSP' , 
			'Gamecube'
		];
	    return view('saludos', compact('tNombre','html','script','consolas'));
    }

}

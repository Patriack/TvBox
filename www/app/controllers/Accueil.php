<?php

class Accueil extends Controller
{
	
	//Constructeur de la classe
    public function __construct()
    {
        session_start();
    }

    //Fonction appeler par d�faut
    public function index($name = '')
    {
		parent::view('Accueil/index')
	}
}

?>
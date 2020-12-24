<?php
require 'model.php';
class ctrl{
	private $modele;

	public function __construct(){
		
		$this->modele=new modele ();
	}
	public function addNewEmployeAction($nom,$prenom,$sexe,$address,$date_naissance,$num_service){
		$this->modele->addNewEmploye($nom,$prenom,$sexe,$address,$date_naissance,$num_service);
	}

}
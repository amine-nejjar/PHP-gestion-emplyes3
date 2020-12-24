<?php
class modele {
	private $db;
	public function __construct()
	{
		define('USER',"root");
		define('PASS',"");
		$this->db = new PDO('mysql:host=localhost;dbname=grh',USER,PASS);
	}
	public function allEmployes()
	{
		$query=$this->db->prepare('SELECT * FROM employes');
		$query->execute();
		return $query->fetchAll();
	}
	public function allservice()
	{
		$query=$this->db->prepare('SELECT * FROM service');
		$query->execute();
		return $query->fetchAll();
	}
	public function addNewEmploye($nom,$prenom,$sexe,$address,$date_naissance,$num_service){
		$quer="insert into employes(nom,prenom,sexe,address,date_naissance,id_service) values('".$nom."','".$prenom."','".$sexe."','".$address."','".$date_naissance."','".$num_service."')";
		$query=$this->db->prepare($quer);
		$query->execute();
	}
	public function deleteEmploye($id){
		$query=$this->db->prepare('delete from employes where id=?');
		$query->execute($id);
	}
	public function updateEmploye($id,$nom,$prenom,$sexe,$address,$date_naissance,$num_service){
		$qeur='update employes set nom=?, prenom=?, sexe=?, address=?, date_naissance=?, id_service=? where id=?';
		$query=$this->db->prepare($quer);
		$query->execute($nom,$prenom,$sexe,$address,$date_naissance,$num_service,$id);
	}
}
	
?>
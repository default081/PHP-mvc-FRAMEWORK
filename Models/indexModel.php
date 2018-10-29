<?php 

require_once('./Components/db.php');
class indexModel extends dbClass
{
	
	function __construct(){
		$dbcon = new dbClass(); 
		$this->conn = $dbcon->connect();
	}

	function getAll(){
		$query = $this->conn->prepare("SELECT * FROM articles");
		$query->execute();
		return $query->fetchAll();
	}

}

 ?>
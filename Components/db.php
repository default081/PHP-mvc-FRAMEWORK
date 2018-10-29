<?php 

class dbClass
{
	function __construct(){}

	function connect(){
		try{
			$pdo = new PDO('mysql:host=127.0.0.1;dbname=simpleBlog',"root",'');
			return $pdo;
		}
		catch(PDOException $e){
			echo $e;
		}
	}
}

?>

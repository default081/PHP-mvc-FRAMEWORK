<?php 

class dbClass
{
	public function connect(){
		$connection = new PDO('mysql:host=127.0.0.1;dbname=framework',"root",'');
		return $connection;
	}
}

?>

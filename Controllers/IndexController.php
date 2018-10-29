<?php

require("./Models/indexModel.php");

class IndexController extends indexModel{

    function __construct(){
         $this->m = new indexModel;
    }   
    
    function actionIndex(){
    	
    	var_dump($this->m->getAll());

    	global $smarty;
    	loadTemplate($smarty, "index");
    	echo "index";
    }

}

?>

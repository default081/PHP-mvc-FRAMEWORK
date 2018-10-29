<?php

class IndexController{

    function __construct(){
               
    }   
    
    function actionIndex(){
    	global $smarty;
    	loadTemplate($smarty, "index");
    	echo "index";
    }

}

?>

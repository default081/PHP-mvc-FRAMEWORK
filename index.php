<?php

session_start();

require_once("./Components/Router.php");
require_once("./Components/confingMain.php");
require_once("./Components/mainFunctions.php");

$router = new Router;
$router->run();
?>

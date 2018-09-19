<?php

session_start();

require_once("./Components/Router.php");

$router = new Router;
$router->run();
echo "Start";
?>

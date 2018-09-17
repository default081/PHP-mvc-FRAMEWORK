<?

class Router{

  private $routes;

  function __construct(){
      $this->routes = require_once("./Configs/routes.php");
  }


  function getUri(){
      if(isset($_SERVER['REQUEST_URI'])){
          $uri = preg_replace("~/framework/~", "", $_SERVER['REQUEST_URI']);
          return $uri;
      }  
  }

  function run(){
      $uri = $this->getUri();
      foreach($this->routes as $uriPattern => $path){
          if(preg_match("~$uriPattern~", $uri)){
              echo 'index';
          }
      }
  }

}

?>

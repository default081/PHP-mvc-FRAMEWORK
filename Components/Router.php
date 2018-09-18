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
              $internalRoutes = preg_replace("~$uriPattern~", $path, $uri);
              $segments = explode("/", $internalRoutes);
              $controllerName = ucfirst(array_shift($segments)) . "Controller";
              $actionName = "action" . ucfirst(array_shift($segments));
              $parametres = $segments;
              if(file_exists("./Controllers/" . $controllerName . ".php")){
                  require_once("./Controllers/" . $controllerName . ".php");
              }
              $controllerObject = new $controllerName;

              $result = call_user_func_array(array($controllerObject, $actionName), $parametres);

              if ($result == null) {
                  break;
              }
          }
      }
  }

}

?>

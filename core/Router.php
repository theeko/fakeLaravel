<?php
namespace App\Core;

class Router{

  protected $routes = [];

  public function get($page, $controller){
    $this->routes["GET"][$page] = $controller;
  }

  public function post($page, $controller){
    $this->routes["POST"][$page] = $controller;
  }

  public function direct($uri, $reqType){
    if(array_key_exists($uri, $this->routes[$reqType])){

      return $this->callAction(...explode( "@", $this->routes[$reqType][$uri]));

    }
    throw new \Exception("404: page not found");
  }

  private function callAction($controller, $method){

    $fullCtrlPath = "\\App\\Controllers\\{$controller}";
    $ctrl = new $fullCtrlPath;

    if(! method_exists($ctrl, $method)){
      throw new \Exception("method does not exist");
    }
    return $ctrl->$method();
  }

  public static function load($file){
    $router = new static;
    require $file;
    return $router;
  }

}

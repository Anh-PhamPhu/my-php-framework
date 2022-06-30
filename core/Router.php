<?php
namespace app\core;

class Router {
    public Request $request;
    protected array $routes = [];

    public function __construct(Request $request){
        $this->request = $request;
    }
    public function get($path, $callback){
        $this->routes['get'][$path] = $callback;
    }

    public function resolve(){
        // echo '<pre>';
        // var_dump($_SERVER);
        // echo '</pre>';
        // exit;
        $path = $this->request->getPath();
        // echo '<pre>';
        // var_dump($path);
        // echo '</pre>';
        // exit;
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if($callback === false){
            echo "Not Found!!!";
            exit;
        }
        // echo '<pre>';
        // var_dump($callback);
        // echo '</pre>';
        // exit;
        echo call_user_func($callback);
    }
}


?>
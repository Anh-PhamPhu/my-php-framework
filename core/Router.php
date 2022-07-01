<?php
namespace app\core;

class Router {
    public Request $request;
    public Response $response;
    protected array $routes = [];

    public function __construct(Request $request, Response $response){
        $this->request = $request;
        $this->response = $response;
    }
    public function get($path, $callback){
        $this->routes['get'][$path] = $callback;
    }
    public function post($path, $callback){
        $this->routes['post'][$path] = $callback;
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
        $method = $this->request->method();
        $callback = $this->routes[$method][$path] ?? false;
        if($callback === false){
            Application::$app->response->setStatusCode(404);
            return $this->renderContent("_404");
        }else if(is_string($callback)){
            return $this->renderView($callback);
        }
        // echo '<pre>';
        // var_dump($callback);
        // echo '</pre>';
        // exit;
        return call_user_func($callback, $this->request);
    }
    
    public function renderView($view, $params = []){
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view, $params);
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function renderContent($viewContent){
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($viewContent);
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    protected function layoutContent(){
        ob_start();
        include_once Application::$ROOT_DIR.'/views/layouts/mainLayouts.php';
        return ob_get_clean();
    }
    protected function renderOnlyView($view, $params){
        foreach($params as $key => $value){
            $$key = $value;
        }
        ob_start();
        include_once Application::$ROOT_DIR.'/views/'.$view.'.php';
        return ob_get_clean();
    }
}


?>
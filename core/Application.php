<?php
namespace app\core;
class Application {
    public static string $ROOT_DIR;
    public static Application $app;
    public Router $router;
    public Request $request;
    public Response $response;
    public Session $session;
    public Controller $controller;
    public Database $db;
    public string $userClass;

    public function __construct($rootPath, array $config){
        $this->userClass = $config['userClass'];
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->session = new Session();
        $this->controller = new Controller();
        $this->router = new Router($this->request, $this->response, $this->controller);
        $this->db = new Database($config['db']);   
        
        $primaryValue = $this->session->get('user');
        if($primaryValue){

            $primaryKey = (new $this->userClass)->primaryKey();
            $this->user = (new $this->userClass)->findOne([$primaryKey => $primaryValue]);
        }else{
            $this->user = null;
        }
    }

    public function getController(): \app\core\Controller {
        return $this->controller;
    }

    public function setController(\app\core\Controller $controller): void{
        $this->controller = $controller;
    }

    public function login(DbModel $user){
        $this->user = $user;
        $primaryKey = $user->primaryKey();
        $primaryValue = $user->{$primaryKey};
        $this->session->set('user', $primaryValue);
        return true;
    }

    public function logout(){
        $this->user = null;
        $this->session->remove('user');
    }

    public function run(){
        echo $this->router->resolve();
    }

    public static function isGuest() {
        return !self::$app->user;
    }

}
?>
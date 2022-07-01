<?php
    use app\core\Application;
    use \app\controllers\SiteController;
    use \app\controllers\AuthController;

    require_once __DIR__.'/../vendor/autoload.php';

    $app = new Application(dirname(__DIR__));

    $app->router->get('/', 'index');
    $app->router->get('/users', [new SiteController, 'showUsers']);
    $app->router->post('/users', [new SiteController, 'handleUsers']);
    $app->router->get('/register', [new AuthController, 'register']);
    $app->router->get('/login', [new AuthController, 'login']);

    $app->run();

?>

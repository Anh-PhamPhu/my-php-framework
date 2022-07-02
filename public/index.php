<?php
    use app\core\Application;
    use \app\controllers\SiteController;
    use \app\controllers\AuthController;

    require_once __DIR__.'/../vendor/autoload.php';

    $app = new Application(dirname(__DIR__));

    $app->router->get('/', 'index');
    $app->router->get('/users', [SiteController::class, 'showUsers']);
    $app->router->post('/users', [SiteController::class, 'handleUsers']);
    $app->router->get('/register', [AuthController::class, 'register']);
    $app->router->post('/register', [AuthController::class, 'register']);
    $app->router->get('/login', [AuthController::class, 'login']);
    $app->router->post('/login', [AuthController::class, 'login']);

    $app->run();

?>

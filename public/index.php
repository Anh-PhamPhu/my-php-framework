<?php
    use app\core\Application;
    use \app\controllers\SiteController;
    use \app\controllers\AuthController;

    require_once __DIR__.'/../vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
    $dotenv->load();

    $config = [
        'userClass' => \app\models\User::class,
        'db' => [
            'dsn' => $_ENV['DB_DSN'],
            'user' => $_ENV['DB_USER'],
            'password' => $_ENV['DB_PASSWORD'],
        ]
    ];

    $app = new Application(dirname(__DIR__), $config);

    $app->router->get('/', 'index');
    $app->router->get('/users', [SiteController::class, 'showUsers']);
    $app->router->post('/users', [SiteController::class, 'handleUsers']);
    $app->router->get('/register', [AuthController::class, 'register']);
    $app->router->post('/register', [AuthController::class, 'register']);
    $app->router->get('/login', [AuthController::class, 'login']);
    $app->router->post('/login', [AuthController::class, 'login']);
    $app->router->get('/logout', [AuthController::class, 'logout']);

    $app->run();

?>

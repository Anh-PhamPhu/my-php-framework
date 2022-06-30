<?php
    use app\core\Application;
    
    require_once __DIR__.'/vendor/autoload.php';

    $app = new Application();

    $app->router->get('/', function(){
        return 'Welcome to my framework';
    });
    $app->router->get('/home', function(){
        return 'Welcome to Home';
    });
    $app->run();

?>

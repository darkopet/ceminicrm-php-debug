<?php

    echo "chckpnt1".'<br><br>';
    
    require_once __DIR__.'/../vendor/autoload.php';

    use app\controllers\Controller;
    use app\models\Employee;
    use app\Database;
    use app\Router;

    $router = new Router();
    // var_dump($router);

    echo "chckpnt2".'<br><br>';

    $router->get('' , [Controller::class, 'index']);
    $router->get('/' , [Controller::class, 'index']);
    $router->get('/public' , [Controller::class, 'index']);
   
    $router->get('/employees/create.php', [Controller::class, 'create']);
    $router->post('/employees/create', [Controller::class, 'create']);
    
    $router->get('/employees/update', [Controller::class, 'update']);
    $router->post('/employees/update', [Controller::class, 'update']);

    $router->post('/views/employees/delete', [Controller::class, 'delete']);
    
    echo "chckpnt3".'<br><br>';

    $router->resolve(); // PROBLEM!

    echo "<br><br>";
    echo "chckpnt4".'<br><br>';
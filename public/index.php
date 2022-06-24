<?php

    echo "chckpnt1".'<br><br>';
    
    require_once __DIR__.'/../vendor/autoload.php';

    use app\Router;
    use app\controllers\Controller;

    $router = new Router();

    echo "chckpnt2".'<br><br>';

    // $router->get('', [ProductController::class, 'index']);
    // $router->get('/', [ProductController::class, 'index']);
    // $router->get('/products', [ProductController::class, 'index']);
    // $router->get('/products/', [ProductController::class, 'index']);
    // $router->get('/public', [ProductController::class, 'index']);
    // $router->get('/public/', [ProductController::class, 'index']);
    // $router->get('/products/index', [ProductController::class, 'index']);

    // $router->get('/products/create', [ProductController::class, 'create']);
    // $router->post('/products/create', [ProductController::class, 'create']);

    // $router->get('/products/update', [ProductController::class, 'update']);
    // $router->post('/products/update', [ProductController::class, 'update']);
    
    // $router->post('/products/delete', [ProductController::class, 'delete']);
    // $router->post('/public/delete', [ProductController::class, 'delete']);

    // echo "good".'<br><br>';


    $router->get('' , [Controller::class, 'index']);
    $router->get('/' , [Controller::class, 'index']);
    $router->get('/public' , [Controller::class, 'index']);
    $router->get('/employees' , [Controller::class, 'index']);

    $router->get('/employees/create.php', [Controller::class, 'create']);
    $router->post('/employees/create', [Controller::class, 'create']);
    
    $router->get('/employees/update', [Controller::class, 'update']);
    $router->post('/employees/update', [Controller::class, 'update']);

    $router->post('/views/employees/delete', [Controller::class, 'delete']);
    
    echo "chckpnt3".'<br><br>';

    $router->resolve(); // PROBLEM!

    echo "<br><br>";
    echo "chckpnt4".'<br><br>';
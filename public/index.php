<?php
/**
 * Copyright (c) 2019.
 * This project is made and maintained by Ariful Islam using Slim framework for testing api. Here anybody can use this project for learning purpose. But it is still in production. That's why using in production is not recommended. To know more about me just knock me at github.com/arif98741
 * facebook.com/arifulislammc007
 *
 */

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use phpDocumentor\Reflection\DocBlock;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/config/DB.php';

$app = AppFactory::create();
$app->addRoutingMiddleware();
$errorMiddleware = $app->addErrorMiddleware(true, true, true);

// Define app routes
$app->get('/hello/{name}', function (Request $request, Response $response, $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    return $response;
});

require __DIR__ . '/../src/config/Helper.php';
require __DIR__ . '/../src/route/book.php';
require __DIR__ . '/../src/route/customer.php';


// Run app
$app->run();
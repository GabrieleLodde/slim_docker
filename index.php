<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();

$app->get('/index.php', function (Request $request, Response $response, $args) {
    $response->getBody()->write("<p style='font-size:100px;'>Hello world!</p>");
    return $response;
});

$app->run();
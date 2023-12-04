<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('home', new Route('/'));
$routes->add('hello', new Route('/hello/{name}', ['name' => 'World']));
$routes->add('fibonacci', new Route('/fibonacci/{nb}', ['nb' => 10], ['nb' => '^[1-9][0-9]*$']));
$routes->add('studentIndex', new Route('/student'));
$routes->add('studentNew', new Route('/student/new'));
$routes->add('studentShow', new Route('/student/{id}', [], ['id' => ('\d+')]));
$routes->add('studentEdit', new Route('/student/{id}/edit', [], ['id' => ('\d+')]));
$routes->add('studentDelete', new Route('/student/{id}/delete', [], ['id' => ('\d+')]));

return $routes;
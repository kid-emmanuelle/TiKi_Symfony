<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('home', new Route('/'));
$routes->add('contact', new Route('/contact-to-email'));
$routes->add('about', new Route('/about'));
$routes->add('search', new Route('/search'));
$routes->add('bookSearch', new Route('/bookSearch'));
$routes->add('hello', new Route('/hello/{name}', ['name' => 'World']));
$routes->add('fibonacci', new Route('/fibonacci/{nb}', ['nb' => 10], ['nb' => '^[1-9][0-9]*$']));
$routes->add('studentIndex', new Route('/student'));
$routes->add('studentNew', new Route('/student/new'));
$routes->add('studentShow', new Route('/student/{id}', [], ['id' => ('\d+')]));
$routes->add('bookProfil', new Route('/book/{id}', [], ['id' => ('\d+')]));
$routes->add('studentEdit', new Route('/student/{id}/edit', [], ['id' => ('\d+')]));
$routes->add('studentDelete', new Route('/student/{id}/delete', [], ['id' => ('\d+')]));
$routes->add('login', new Route('/login'));
$routes->add('register', new Route('/register'));
$routes->add('identificationLogin', new Route('/identificationLogin'));
$routes->add('identificationRegister', new Route('/identificationRegister'));

return $routes;
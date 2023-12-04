<?php

/**
 * @var Twig\Environment $twig
 * @var string $name
 */

use Symfony\Component\HttpFoundation\Response;

return new Response($twig->render('hello/hello.html.twig', ['name' => $name]));
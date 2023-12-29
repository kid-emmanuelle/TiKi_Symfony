<?php

/**
 * @var Twig\Environment $twig
 */

use Symfony\Component\HttpFoundation\Response;



return new Response($twig->render('account/login.html.twig'));
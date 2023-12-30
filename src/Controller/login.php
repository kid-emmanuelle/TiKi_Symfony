<?php

/**
 * @var Twig\Environment $twig
 */

use Symfony\Component\HttpFoundation\Response;

session_start();
if(isset($_SESSION['user_name'])){
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
    $_SESSION['is_logged_in'] = false;
}

return new Response($twig->render('account/login.html.twig'));
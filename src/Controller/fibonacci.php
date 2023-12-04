<?php

/**
 * @var Twig\Environment $twig
 * @var int $nb
 */

use Symfony\Component\HttpFoundation\Response;

$listeFibonacci = [];

$num1 = 0;
$num2 = 1;

$counter = 0;
while ($counter <= $nb) {
    $listeFibonacci[] = $num1;
    $num3 = $num2 + $num1;
    $num1 = $num2;
    $num2 = $num3;
    $counter = $counter + 1;
}

return new Response($twig->render('fibonacci/fibonacci.html.twig', ['nb' => $nb, 'listeFibonacci' => $listeFibonacci]));
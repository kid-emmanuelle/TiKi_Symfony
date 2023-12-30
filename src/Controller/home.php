<?php

/**
 * @var Twig\Environment $twig
 * @var Doctrine\ORM\EntityManager $entityManager
 */

use Entity\Book;
use Entity\User;
use Symfony\Component\HttpFoundation\Response;

$bookRepository = $entityManager->getRepository(Book::class);
$books = $bookRepository->findAll();
$userRepository = $entityManager->getRepository(User::class);
$users = $userRepository->findAll();

session_start();
if(isset($_SESSION['user_name'])){
    $name = $_SESSION['user_name'];
}else{
    $name = "Log in";
}

return new Response($twig->render('home/home.html.twig', ['books' => $books, 'users' => $users, 'cart_rows_numbers' => 0, "name" => $name]));
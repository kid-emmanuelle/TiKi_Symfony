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

return new Response($twig->render('home/home.html.twig', ['books' => $books, 'users' => $users, 'cart_rows_numbers' => 0]));
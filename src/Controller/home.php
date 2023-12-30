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
//$userRepository = $entityManager->getRepository(User::class);
//$users = $userRepository->findAll();

session_start();
if(isset($_SESSION['user_name'])){
    $name = $_SESSION['user_name'];
}else{
    $name = "Log in";
}

// Retrieve the book IDs cookie
$bookIdsCookie = $_COOKIE['bookId'] ?? '';
$bookIdsArray = explode(',', $bookIdsCookie);
$cartBooks = [];
foreach ($bookIdsArray as $bookId) {
    $bookRepository = $entityManager->getRepository(Book::class);
    $criteria = array('id' => $bookId);
    $book = $bookRepository->findOneBy($criteria);
    if ($book) {
        $cartBooks[] = $book;
    }
}
// Get username and pass it into user
$username = $_COOKIE['userName'] ?? 'user';

return new Response($twig->render('home/home.html.twig', ['books' => $books, 'user' => $username, 'cart_rows_numbers' => count($cartBooks), "name" => $name]));
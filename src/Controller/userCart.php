<?php
/**
 * @var Twig\Environment $twig
 * @var Doctrine\ORM\EntityManager $entityManager
 */

use Entity\Book;
use Symfony\Component\HttpFoundation\Response;

// Retrieve the book IDs cookie
$bookIdsCookie = $_COOKIE['bookId'] ?? '';
// Convert the cookie value to an array of book IDs
$bookIdsArray = explode(',', $bookIdsCookie);

$books = []; $totalPrice = 0;
foreach ($bookIdsArray as $bookId) {
    $bookRepository = $entityManager->getRepository(Book::class);
    $criteria = array('id' => $bookId);
    $book = $bookRepository->findOneBy($criteria);

    if ($book) {
        $books[] = $book;
        $totalPrice += $book->getPrice();
    }
}

return new Response($twig->render('home/cart.html.twig', ['books' => $books, 'cart_rows_numbers' => count($books), 'totalPrice' => $totalPrice]));

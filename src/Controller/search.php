<?php

/**
 * @var Twig\Environment $twig
 * @var Doctrine\ORM\EntityManager $entityManager
 */

use Entity\Book;
use Symfony\Component\HttpFoundation\Response;

// Calculate the rows numbers
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
// Get user to load cart page
$username = $_COOKIE['userName'] ?? 'user';

// Manage submission search
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchItem = (string)($_POST['search'] ?? '');
    // get Repository of Book
    $bookRepository = $entityManager->getRepository(Book::class);

    $queryBuilder = $bookRepository->createQueryBuilder('b');
    $query = $queryBuilder
        ->where($queryBuilder->expr()->like('b.title', ':searchTerm'))
        ->setParameter('searchTerm', '%' . $searchItem . '%')
        ->getQuery();
    $books = $query->getResult();

    return new Response($twig->render('home/search.html.twig', ['books' => $books, 'user' => $username, 'cart_rows_numbers' => count($cartBooks)]));
} else {
    $bookRepository = $entityManager->getRepository(Book::class);
    $books = $bookRepository->findAll();
    return new Response($twig->render('home/search.html.twig', ['books' => $books, 'user' => $username, 'cart_rows_numbers' => count($cartBooks)]));
}

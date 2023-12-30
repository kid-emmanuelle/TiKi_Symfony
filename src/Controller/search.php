<?php

/**
 * @var Twig\Environment $twig
 * @var Doctrine\ORM\EntityManager $entityManager
 */

use Entity\Book;
//use Entity\User;
use Symfony\Component\HttpFoundation\Response;

//$bookRepository = $entityManager->getRepository(Book::class);
//$books = $bookRepository->findAll();
//$userRepository = $entityManager->getRepository(User::class);
//$users = $userRepository->findAll();
//$bookRepository = $entityManager->getRepository(Book::class);
//
//$criteria = array('title' => 'Yellowface');
//
//$books = $bookRepository->findBy($criteria);

use Symfony\Component\Cache\Adapter\FilesystemAdapter;

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

    return new Response($twig->render('home/search.html.twig', ['books' => $books, 'cart_rows_numbers' => 0]));
} else {
    return new Response($twig->render('home/search.html.twig', ['books' => null, 'cart_rows_numbers' => 0]));
}

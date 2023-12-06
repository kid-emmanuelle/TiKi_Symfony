<?php

/**
 * @var Twig\Environment $twig
 * @var Doctrine\ORM\EntityManager $entityManager
 * @var int $id
 */

use Entity\Book;
use Entity\Image;
use Entity\Review;
use Symfony\Component\HttpFoundation\Response;

$bookRepository = $entityManager->getRepository(Book::class);
$book = $bookRepository->find($id);

return new Response($twig->render('student/show.html.twig', ['book' => $book]));
<?php

/**
 * @var Twig\Environment $twig
 * @var Doctrine\ORM\EntityManager $entityManager
 * @var int $id
 */

use Entity\Book;
use Symfony\Component\HttpFoundation\Response;

$studentRepository = $entityManager->getRepository(Book::class);
$book = $studentRepository->find($id);

return new Response($twig->render('student/show.html.twig', ['book' => $book]));
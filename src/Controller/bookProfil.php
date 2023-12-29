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

if ($book == null) {
    return new Response('The requested page doesn\'t exist', Response::HTTP_NOT_FOUND);
}


$recommandations = array();
$reviews = $book->getReviews()->getValues();
/** @var Review $review */
foreach ($reviews as $review) {
    $user = $review->getUser();
    $user_reviews = $user->getReviews()->getValues();
    /** @var Review $user_review */
    foreach ($user_reviews as $user_review) {
        if(($tmpBook = $user_review->getBook())->getId() != $book->getId())
            array_push($recommandations, $tmpBook);
    }
}



return new Response($twig->render('book/profil.html.twig', ['book' => $book, 'recommandations' => $recommandations]));
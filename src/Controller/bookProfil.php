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
        if(($tmpBook = $user_review->getBook())->getId() != $book->getId()){
            array_push($recommandations, $tmpBook);
            if(count($recommandations) > 2){
                break;
            }
        }
    }
    if(count($recommandations) > 2){
        break;
    }
}

// Retrieve the book IDs cookie
$bookIdsCookie = $_COOKIE['bookId'] ?? '';
$bookIdsArray = explode(',', $bookIdsCookie);
$cartBooks = [];
foreach ($bookIdsArray as $bookId) {
    $bookRepository = $entityManager->getRepository(Book::class);
    $criteria = array('id' => $bookId);
    $bookC = $bookRepository->findOneBy($criteria);
    if ($bookC) {
        $cartBooks[] = $bookC;
    }
}
// Get username and pass it into user
$username = $_COOKIE['userName'] ?? 'user';


return new Response($twig->render('book/profil.html.twig', ['book' => $book, 'user' => $username,'recommandations' => $recommandations, 'cart_rows_numbers' => count($cartBooks)]));
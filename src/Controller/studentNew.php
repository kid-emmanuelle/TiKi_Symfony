<?php

/**
 * @var Twig\Environment $twig
 * @var Doctrine\ORM\EntityManager $entityManager
 * @var Request $request
 * @var ValidatorInterface $validator
 */

use Entity\Book;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;

$studentRepository = $entityManager->getRepository(Book::class);

$arrayViolations = [];

if (Request::METHOD_POST == $request->getMethod()) {
    $book = (new Book())
        ->setId($request->get('id'))
        ->setTitle($request->get('title'))
        ->setDescription($request->get('description'))
        ->setImage($request->get('images'))
        ->setFormat($request->get('format'))
        ->setPrice($request->get('price'))
        ->setReviews($request->get('reviews'));

    $violations = $validator->validate($book);

    if ($violations->count() == 0) {
        $entityManager->persist($book);
        $entityManager->flush();

        return new RedirectResponse('/student');
    }
    foreach ($violations as $violation) {
        $arrayViolations[$violation->getPropertyPath()][] = $violation->getMessage();
    }
}

return new Response($twig->render('student/new.html.twig', ['violations' => $arrayViolations]));
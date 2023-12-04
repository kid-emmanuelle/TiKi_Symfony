<?php

/**
 * @var Twig\Environment $twig
 * @var Doctrine\ORM\EntityManager $entityManager
 * @var Request $request
 * @var ValidatorInterface $validator
 */

use Entity\Student;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;

$studentRepository = $entityManager->getRepository(Student::class);

$arrayViolations = [];

if (Request::METHOD_POST == $request->getMethod()) {
    $student = (new Student())
        ->setName($request->get('name'))
        ->setFirstname($request->get('firstname'))
        ->setOld($request->get('old'));

    $violations = $validator->validate($student);

    if ($violations->count() == 0) {
        $entityManager->persist($student);
        $entityManager->flush();

        return new RedirectResponse('/student');
    }
    foreach ($violations as $violation) {
        $arrayViolations[$violation->getPropertyPath()][] = $violation->getMessage();
    }
}

return new Response($twig->render('student/new.html.twig', ['violations' => $arrayViolations]));
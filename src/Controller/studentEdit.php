<?php

/**
 * @var Twig\Environment $twig
 * @var Doctrine\ORM\EntityManager $entityManager
 * @var Request $request
 * @var int $id
 * @var ValidatorInterface $validator
 */

use Entity\Student;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;

$studentRepository = $entityManager->getRepository(Student::class);
$student = $studentRepository->find($id);

$arrayViolations = [];

if (Request::METHOD_POST == $request->getMethod()) {
    $student
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

return new Response($twig->render('student/edit.html.twig', ['student' => $student, 'violations' => $arrayViolations]));
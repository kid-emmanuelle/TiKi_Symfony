<?php

/**
 * @var Twig\Environment $twig
 * @var Doctrine\ORM\EntityManager $entityManager
 * @var int $id
 */

use Entity\Student;
use Symfony\Component\HttpFoundation\Response;

$studentRepository = $entityManager->getRepository(Student::class);
$student = $studentRepository->find($id);

return new Response($twig->render('student/show.html.twig', ['student' => $student]));
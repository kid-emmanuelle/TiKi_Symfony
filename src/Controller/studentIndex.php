<?php

/**
 * @var Twig\Environment $twig
 * @var Doctrine\ORM\EntityManager $entityManager
 */

use Entity\Student;
use Symfony\Component\HttpFoundation\Response;

$studentRepository = $entityManager->getRepository(Student::class);
$students = $studentRepository->findAll();

return new Response($twig->render('student/index.html.twig', ['students' => $students]));
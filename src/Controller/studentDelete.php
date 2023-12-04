<?php

/**
 * @var Twig\Environment $twig
 * @var Doctrine\ORM\EntityManager $entityManager
 * @var int $id
 */

use Entity\Student;
use Symfony\Component\HttpFoundation\RedirectResponse;

$studentRepository = $entityManager->getRepository(Student::class);
$student = $studentRepository->find($id);

$entityManager->remove($student);
$entityManager->flush();

return new RedirectResponse('/student');
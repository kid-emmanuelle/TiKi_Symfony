<?php
/**
 * @var Twig\Environment $twig
 * @var Doctrine\ORM\EntityManager $entityManager
 *  @var ValidatorInterface $validator
 * */

use Symfony\Component\HttpFoundation\Response;
use Entity\Review;
use Entity\User;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();

    $mail = $_POST['email'] ?? '';
    $firstname = $_POST['firstname'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $password = $_POST['password'] ?? '';


    $userRepository = $entityManager->getRepository(User::class);

    $criteria = array('mail' => $mail);
    $valid = true;

    $user = $userRepository->findOneBy($criteria);
    if($user){
        $valid = false;
    }

    $user = (new User())
        ->setMail($mail)
        ->setName($lastname)
        ->setFirstname($firstname)
        ->setPassword(password_hash($password, PASSWORD_DEFAULT));

    $violations = $validator->validate($user);

    if ($violations->count() == 0) {
        $entityManager->persist($user);
        $entityManager->flush();
        $response = array('success' => true, 'message' => 'Account created');
        $_SESSION['user_id'] = $user->getId();
        $_SESSION['test'] = $user->getName();
    } else {
        $arrayViolations = [];
        foreach ($violations as $violation) {
            $arrayViolations[$violation->getPropertyPath()][] = $violation->getMessage();
        }
        if(!$valid){
            $arrayViolations['mail'][] = 'This email is already used.';
        }
        $response = array('success' => false, 'message' => 'check violations', 'errors' => $arrayViolations);
    }


    header('Content-Type: application/json');
    echo json_encode($response);
    return true;
} else {
    http_response_code(400);
    echo json_encode(array('success' => false, 'message' => 'Bad Request'));
}
?>



<?php
/**
 * @var Twig\Environment $twig
 * @var Doctrine\ORM\EntityManager $entityManager
 * */

use Symfony\Component\HttpFoundation\Response;
use Entity\Review;
use Entity\User;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $userRepository = $entityManager->getRepository(User::class);

    $criteria = array('mail' => $username);

    $user = $userRepository->findOneBy($criteria);


    if(!$user){
        $response = array('success' => false, 'message' => 'email incorrect', 'code' => 1);
    }else if (password_verify($password, $user->getPassword())) {
        $response = array('success' => true, 'message' => 'Identification reussie', 'code' => 0, 'user' => $user);
        $_SESSION['user_id'] = $user->getId();
        $_SESSION['test'] = $user->getName();
        // Set session variables for Twig
        $_SESSION['is_logged_in'] = true; // Set a flag for logged-in status
        $_SESSION['user_name'] = $user->getName(); // Set the user's name
    } else {
        $response = array('success' => false, 'message' => 'email or password incorrect', 'code' => 2);
    }
    header('Content-Type: application/json');
    echo json_encode($response);
    return true;
} else {
    http_response_code(400);
    echo json_encode(array('success' => false, 'message' => 'Bad Request'));
}




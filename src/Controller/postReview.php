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

    if (isset($_SESSION['user_id'])) {
        $star = $_POST['star'] ?? 3;
        $text = $_POST['review'] ?? '';
        $book = $_POST['book'] ?? '';

        $user_id = $_SESSION['user_id'];


        $reviewRepository = $entityManager->getRepository(Review::class);

        $review = (new Review())
            ->setBook($book)
            ->setStar($star)
            ->setText($text)
            ->setUser($user_id);

        $entityManager->persist($review);
        $entityManager->flush();

        $response = array('success' => true, 'message' => 'review added');

    }else{
        $response = array('success' => false, 'message' => 'Not connected');

    }

    header('Content-Type: application/json');
    echo json_encode($response);
    return true;

} else {
    http_response_code(400);
    echo json_encode(array('success' => false, 'message' => 'Bad Request'));
}

?>



<?php

/**
 * @var Twig\Environment $twig
 * @var Doctrine\ORM\EntityManager $entityManager
 */

use Entity\Book;
use Symfony\Component\HttpFoundation\Response;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
       // Book added successfully
        echo json_encode(array('status' => 'success', 'message' => 'Your book has been added. Thank you!'));
    } catch (Exception $e) {
        // Failed to add book
        echo json_encode(array('status' => 'error', 'message' => 'Failed to add book. Please try again later.'));
    }
} else {
    // Handle invalid request method
    http_response_code(405); // Method Not Allowed
    echo json_encode(array('status' => 'error', 'message' => 'Method not allowed.'));
}

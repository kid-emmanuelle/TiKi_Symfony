<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Votre logique d'authentification ici (par exemple, vérification dans une base de données)
    // Remplacez cela par votre propre logique d'authentification
    $utilisateurValide = false; // À titre d'exemple, considérons que la connexion réussit

    if ($utilisateurValide) {
        // Redirection vers une autre page en cas de succès de la connexion
        header("Location: page-secrete.php");
        exit(); // Assurez-vous de terminer le script après la redirection
    } else {
        // Redirection vers la page de connexion avec un paramètre d'erreur
        header("Location: test.html?error=1");
        exit();
    }
}
?>

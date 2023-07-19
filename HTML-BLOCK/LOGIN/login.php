<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtenir les données saisies par l'utilisateur
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Charger et decodifer le fichier JSON
        $jsonData = file_get_contents('usuarios.json');
        $usuarios = json_decode($jsonData, true);

        // Vérifier si l'utilisateur existe dans le fichier JSON et si le mot de passe correspond.
        if (isset($usuarios[$username]) && $usuarios[$username]['contraseña'] === $password) {
            // Connexion session réussie
            $_SESSION['username'] = $username; // Enregistrer le nom d'utilisateur dans la session
            $_SESSION['rol'] = $usuarios[$username]['rol']; // Garder le role dans la session

            // Rediriger en function du role de l'utilisateur
            if ($usuarios[$username]['rol'] === 'administrateur') {
                header("Location: ../ADMINISTRATEUR/administrateurPage.php");
            } else {
                header("Location: ../LISTE/listePage.php");
            }
            exit();
        } else {
            // Données d'identification incorrectes
            $_SESSION['error_message'] = "Nom d'utilisateur ou mot de passe incorrect";
            header("Location: loginPage.php");
            exit();
        }
    }
}

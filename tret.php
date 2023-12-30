<?php 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connexion à la base de données
    $connexion = new mysqli("localhost", "root", "", "test");

    // Vérifier la connexion
    if ($connexion->connect_error) {
        die("La connexion à la base de données a échoué : " . $connexion->connect_error);
    }

    // Récupérer les données du formulaire
    $email = $_POST["email"];
    $password = $_POST["password"]; // Note: Il est fortement recommandé de hacher le mot de passe avant de le stocker en base de données.

    // Préparer la requête SQL
    $requete = $connexion->prepare("SELECT * FROM user WHERE email = ? AND password = ?;");

    // Vérifier la préparation de la requête
    if (!$requete) {
        die("La préparation de la requête a échoué : " . $connexion->error);
    }

    // Binder les paramètres
    $requete->bind_param("ss", $email, $password);

    // Exécuter la requête
    if ($requete->execute()) {
        $result = $requete->get_result();

        if ($result->num_rows > 0) {
            // Utilisateur authentifié avec succès
            $user = $result->fetch_assoc();

            // Stocker les informations de l'utilisateur dans la session
            $_SESSION["user_id"] = $user["user_id"];
            $_SESSION["nom"] = $user["nom"];
            $_SESSION["prenom"] = $user["prenom"];

            // Redirection après une authentification réussie
            header("Location: index.php");
            exit();
        } else {
            echo '<div class="alert alert-danger" role="alert">Identifiants incorrects.</div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">Erreur lors de l\'authentification : ' . $requete->error . '</div>';
    }

    // Fermer la connexion
    $requete->close();
    $connexion->close();
}
?>

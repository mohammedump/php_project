<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <!-- Ajout des liens Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iE7N1LZXjOAx8MOgxWuJXYlUuTK+Or5XQx6jFuBCRZMz9E72CcFboCeP" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/all.css" rel="stylesheet">
    <link href="css/style.css.zip" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <?php
            session_start();
            // Traitement du formulaire d'inscription
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Connexion à la base de données
                $connexion = new mysqli("localhost", "root", "", "test");

                // Vérifier la connexion
                if ($connexion->connect_error) {
                    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
                }

                // Récupérer les données du formulaire
                $nom = $_POST["nom"];
                $prenom = $_POST["prenom"];
                $email = $_POST["email"];
                $password = $_POST["password"]; // Note: Il est fortement recommandé de hacher le mot de passe avant de le stocker en base de données.

                // Préparer la requête SQL
                $requete = $connexion->prepare("INSERT INTO user (nom, prenom, email, password) VALUES (?, ?, ?, ?)");

                // Vérifier la préparation de la requête
                if (!$requete) {
                    die("La préparation de la requête a échoué : " . $connexion->error);
                }

                // Binder les paramètres
                $requete->bind_param("ssss", $nom, $prenom, $email, $password);

                // Exécuter la requête
                if ($requete->execute()) {
                    echo '<div class="alert alert-success" role="alert">Inscription réussie !</div>';
                   /* $_SESSION["nom"] = $nom;
                    $_SESSION["prenom"] = $prenom;*/
                    header("Location: autehtification.php");
                } else {
                    echo '<div class="alert alert-danger" role="alert">Erreur lors de l\'inscription : ' . $requete->error . '</div>';
                }

                // Fermer la connexion
                $requete->close();
                $connexion->close();
            }
            ?>
<?php
include 'nav.php';
?>
            <h2 class="mb-4">Inscription</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                <div class="mb-3">
                    <label for="nom" class="form-label">Nom :</label>
                    <input type="text" class="form-control" name="nom" required>
                </div>

                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom :</label>
                    <input type="text" class="form-control" name="prenom" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" class="form-control" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe :</label>
                    <input type="password" class="form-control" name="password" required>
                </div>

                <button type="submit" class="btn btn-primary">S'inscrire</button>

            </form>
        </div>
    </div>
</div>

<!-- Ajout du script Bootstrap (JavaScript) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eNpO5dAzH358p6B+Bz8u5PA7EKwLb/KWcxCYFYNiSIF3p5MKS6kA/i1aIbIZsH4V" crossorigin="anonymous"></script>
<script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
</body>
</html>

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nom de l'Entreprise - Services</title>

    <!-- Include your CSS stylesheets here -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/all.css" rel="stylesheet">
    <link href="css/style.css.zip" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #333;
        }

        header {
            background-color:rgba(0, 0, 0, 0.1);
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        nav {
            background-color: #333;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 1em;
        }

        section {
            max-width: 800px;
            margin: 2em auto;
            padding: 1em;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .a {
            color: #fff !important;
        }
    </style>

</head>

<body>
    <?php include 'nav.php'; ?>

    <header>
        <h1>Nom de l'Entreprise</h1>
    </header>

    <nav>
        <a href="#">Accueil</a>
        <a href="#">Services</a>
        <a href="#">À Propos</a>
        <a href="#">Contact</a>
    </nav>

    <section>
        <h2>Nos Services</h2>
        <div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2387.443301393923!2d-1.9422181552579547!3d34.68485648790001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7864984106d6ef%3A0x1d86b33244c4650!2sOujda!5e0!3m2!1sfr!2sma!4v1703954286806!5m2!1sfr!2sma" 
        width="750" 
        height="200" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

        <ul>
            <li>Service 1</li>
            <li>Service 2</li>
            <li>Service 3</li>
        </ul>

        <h3>À Propos de Nos Services</h3>
        <p>Nous offrons une gamme variée de services pour répondre aux besoins de nos clients. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentum accumsan tortor, id vestibulum lorem molestie nec.</p>
    </section>

    <footer>
        <p>&copy; 2023 Nom de l'Entreprise. Tous droits réservés.</p>
    </footer>

</body>

</html>

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/all.css" rel="stylesheet">
    <link href="css/style.css.zip" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body><?php
include 'nav.php';
?>
    <!-- NAVBAR-->
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
                <!-- <a class="navbar-brand" href="#">
                  <img src="images/image1.png" alt="logo" >
                </a> -->
          <a class="navbar-brand" href="#">Logo<span>.</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
            <a class="nav-link <?php if($currentPage == 'home') echo 'active'; ?>" href="#authentification.php">Home</a>

              <a class="nav-link" href="#About">About</a>
              <a class="nav-link" href="service.php">Services</a>
              <a href="authentification.php" class="btn btn-brand ms-lg-3">Connection</a>
              <a href="regestration.php" class="btn btn-brand ms-lg-3">Inscription</a>
            </div>
          </div>
        </div>
      </nav>
      <!-- SLIDER-->
      <div class="slider-wrapper">
        <div class="slide1 min-vh-100 bg-cover d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h6 class="text-uppercase text-white">We craft digital experiances</h6>
                        <h1 class="display-2 my-3 text-white text-uppercase">Design Driven for</br> Professionals</h1>
                        <a href="#" class="btn btn-brand">Get Started</a>
                        <a href="#" class="btn btn-outline-light ms-md-3">Our Works</a>
                    </div>
                </div>
            </div>
        </div>
      </div>

    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
</body>
</html>

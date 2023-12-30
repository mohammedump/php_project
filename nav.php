<nav class="top-nav" id="home">
        <nav class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <p>
                        <i class="fa-solid fa-envelope"></i>
                        <span> <?php 
                        if (isset($_SESSION["nom"]) && $_SESSION["prenom"]){echo "bonjour ";
                        echo $_SESSION["prenom"]." ".$_SESSION["nom"];
                         }?></span>
                    </p>
                    <?php 
                     $currentPage = $_SERVER['PHP_SELF'];
                     $expectedPath = '/projet_bootstrap/index.php';
                     
                     if ($currentPage === $expectedPath) {
                            echo '<p class="a">
                            <i class="fa-solid fa-phone"class="a"style=\'color:fff\' ></i>
                            <span>+221 643352155</span>
                        </p>';
                        } else {
                           
                        }
                        ?>
                
                </div>
                <?php
                  if (isset($_SESSION["nom"]) && $_SESSION["prenom"]){
                    echo '<div class="col-auto"><a href="logout.php" class="a" style="color: #fff;">logout</a></div>';
                }
               ?>
                <div class="col-auto">
                    <div class="socila-links">
                        <a href="#" class="a"> <i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="a"> <i class="fa-brands fa-instagram"></i></a>
                        <a href="#"class="a"> <i class="fa-brands fa-github"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </nav>
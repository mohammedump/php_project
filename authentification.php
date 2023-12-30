<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   
<div class="container p-5">
    <form action="tret.php" method="post">
        <div class="mb-3">
            <?php
            session_start(); // Inicia la sesión si aún no ha sido iniciada

            if (isset($_SESSION['error_message'])) {
                echo '<div><h6 class="--bs-danger
                --bs-danger-rgb" style="width: fit-content; border: 1px solid black;">' . $_SESSION['error_message'] . '</h6></div>';
                unset($_SESSION['error_message']); // Limpia el mensaje de error después de mostrarlo
            }
           
            ?>
            <?php
include 'nav.php';
?>
            <label for="email" class="form-label">email
            <input type="email" name="email" id="email" class="form-control" placeholder="email" ></label>
        </div>
        <div class="mb-3">
            <label for="pswd" class="form-label">password
          
            <input type="password" name="password" id="pswd"class="form-control" placeholder="password"></label>
        </div>
       
        <button type="submit" class="btn btn-primary">Connection </button>
    </form>
</div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salas</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="js/usuarios.js"></script>
</head>



<!-- Contenido de la página -->

<body>
  <div>
    <div class="card border-0 shadow my-5">
    <div class="card-body p-50 col" style="margin: auto;  width: 50%; "  >
        <h1 class="fw-light" style="text-align: center;">Administración de Salas</h1>
        <div class="card-body p-50 col" style="margin: auto;  width: 50%;">
        <?php
        include "modal/agregar.php";
        ?>
        </div>

        

        <hr>


        
        <?php
        include "CRUD/readSalas.php";
        ?>
        
        </div>  
      </div>
    </div>
  


  <?php

  ?>

</body>

</html>
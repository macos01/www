<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>
    <?php echo $pageTitle; ?>
  </title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
  <header>
    <h4>Header</h4>
    <?php
    if (isset($_SESSION["login"])){
      echo "<p>Usuario: " . $_SESSION["nombre"] ."</p>";
      echo "<p><a href='pre_logout.php'> Log out</a></p>";
    }
    else {
      echo "<p>Usuario desconocido</p>";
      echo "<p><a href='pre_login.php'> Login</a></p>";
    }
    ?>
  </header>
  <div class="container">

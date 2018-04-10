<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>
    Inicio
  </title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <?php require('layout/header.php'); ?>
  <?php require('layout/nav.php'); ?>
  <div id="container">
    <div id="contenido">
      <h4>Pagina principal</h4>
      <p> Esta es la pagina principal </p>
      <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada.</p>
    </div>
    <?php require('layout/sidebar-right.php') ?>
  </div>
  <?php require('layout/footer.php'); ?>
</body>

</html>

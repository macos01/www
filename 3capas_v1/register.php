<?php require_once('config/config.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>
    Registro
  </title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <?php require('layout/header.php'); ?>
  <?php require('layout/nav.php'); ?>
  <div id="container">
    <div id="contenido">
      <h4>Registro</h4>
      <form class="login_form" action="bll/log_register.php" method="post">
        <p><label>Nombre de usuario</label><input type="text" name="username"/></p>
        <p><label>Contraseña</label><input type="password" name="password"/></p>
        <button type="submit">Register</button>
      </form>
    </div>
    <?php require('layout/sidebar-right.php') ?>
  </div>
  <?php require('layout/footer.php'); ?>
</body>

</html>

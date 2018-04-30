<?php require_once('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>
    Registro
  </title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="includes/assets/css/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <?php require('includes/layout/header.php'); ?>
  <?php require('includes/layout/nav.php'); ?>
  <div id="container">
    <div id="contenido">
      <h4>Registro</h4>
      <form class="login_form" action="bll/log_register.php" method="post">
        <p><label>Nombre de usuario</label><input type="text" name="username"/></p>
        <p><label>Contraseña</label><input type="password" name="password"/></p>
        <button type="submit">Register</button>
      </form>
    </div>
    <?php require('includes/layout/sidebar-right.php') ?>
  </div>
  <?php require('includes/layout/footer.php'); ?>
</body>

</html>

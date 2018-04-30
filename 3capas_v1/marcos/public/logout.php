<?php require_once('includes/config.php'); ?>
<?php


//Doble seguridad: unset + destroy
unset($_SESSION["login"]);
unset($_SESSION["user_id"]);

session_destroy();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>
    Log out
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
      <h4>Log out</h4>
      <p>Hasta pronto!</p>
    </div>
    <?php require('includes/layout/sidebar-right.php') ?>
  </div>
  <?php require('includes/layout/footer.php'); ?>
</body>

</html>

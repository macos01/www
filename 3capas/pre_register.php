<?php $pageTitle = "Registro"; ?>
<?php require('layout/header.php'); ?>
<form class="login_form" action="log_register.php" method="post">
  <p><label>Nombre de usuario</label><input type="text" name="username"/></p>
  <p><label>Contraseña</label><input type="password" name="password"/></p>
  <button type="submit">Log in</button>
</form>
<?php require('layout/footer.php'); ?>

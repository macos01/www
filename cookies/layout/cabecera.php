<div id="cabecera">
  <h1>Mi gran página web</h1>
  <div class="saludo">
    <?php
    if (!isset($_COOKIE["aut"])) {
      echo "Usuario desconocido";
      echo "<a href='login.php'> Login</a>";
    }
    else {
        echo "Bienvenido, " . $_COOKIE["aut"];
        echo "<a href='logout.php'> (salir)</a>";
    }
  ?>
  </div>
</div>

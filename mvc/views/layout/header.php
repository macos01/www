<header>
  <h4>Header</h4>
  <div class="saludo">
    <?php
      if (isset($_SESSION["login"]) && isset($_SESSION["nombre"])){
        echo "<p>Usuario: " . $_SESSION["nombre"] ."</p>";
        echo "<p><a href='logout.php'>Log out</a></p>";
      }
      else {
        echo "<p>Usuario desconocido</p>";
        echo "<p><a href='login.php'>Login</a></p>";
      }
    ?>
  </div>
</header>

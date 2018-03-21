<?php $pageTitle = "Inicio"; ?>
<?php require('layout/header.php'); ?>
<h4>Ejemplo modelo de 3 capas</h4>
  <li>Capa presentacion: Registro y login de usuario</li>
  <li>Capa lógica:
    <ul>
      <li>Operaciones de la aplicacion y control de los datos de la presentación.</li>
      <li>Comunicacion con la capa de datos usando PDO con prepare statements</li>
    </ul>
  </li>
  <li>Capa de datos: Base de datos de usuarios</li>
</ul>
<p><a href="pre_index.php">Enlace modelo</a></p>
<?php require('layout/footer.php'); ?>

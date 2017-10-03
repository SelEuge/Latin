<?php
  session_start();
 include_once 'Conexion.php';

  unset($_SESSION['resultado']);
  header('Location:mostrar_carrito.php');

?>
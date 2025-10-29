<?php
   require 'db_conn.php';
     $arr= explode("/",$_SERVER['HTTP_REFERER']);
    if($_SERVER['REQUEST_METHOD']=='POST'){

      $scope = $_POST["scope"];
      $nombre = $_POST["nombre"];
      $mail = $_POST["mail"];
      $contra = $_POST["contra"];
      $contra2 = $_POST["contra2"]; 


      if ($contra !== $contra2) {
        echo "<script>alert('Las contraseñas no coinciden. Por favor, inténtelo de nuevo.'); window.location.href = '" . $arr[count($arr)-1] . "';</script>";
        exit;
      }

     switch ($scope) {
        case 'sysAdmin':
          $query = "INSERT INTO usuario (nombre, mail, contra, activo, tipo_user) VALUES ('$nombre', '$mail', '$contra', 1, 2)";
          break;
        
        case 'admin':
          $query = "INSERT INTO usuario (nombre, mail, contra, activo, tipo_user) VALUES ('$nombre', '$mail', '$contra', 1, 1)";
          break;

        case 'user':
          $query = "INSERT INTO usuario (nombre, mail, contra, activo, tipo_user) VALUES ('$nombre', '$mail', '$contra', 1, 0)";
          break;
      }
  mysqli_query($conexion, $query);
  mysqli_close($conexion);
  header('Location: ' . $arr[count($arr)-1]);
  exit;
  }
?>





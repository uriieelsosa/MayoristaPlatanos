<?php

    $nombre = $_POST["nombre"];
    $mail = $_POST["mail"];
    $contra = $_POST["contra"];
    $contra2 = $_POST["contra2"];     

    // Aquí puedes agregar la lógica para procesar el registro, como guardar los datos en una base de datos
    $conexion = mysqli_connect('localhost', 'root', '', 'mayorista-platanos');
    $query = "INSERT INTO usuario (nombre, mail, contra, activo, admin) VALUES ('$nombre', '$mail', '$contra', 1, 0)";
    mysqli_query($conexion, $query);
    mysqli_close($conexion);
    header("Location: login.html");
    exit;

?>
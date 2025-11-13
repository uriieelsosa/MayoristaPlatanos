<?php
// login.php    

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'db_conn.php';
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT * FROM usuario WHERE mail = '$email' AND contra = '$password'";
   
    $result =  mysqli_query($conexion, $query);

    if ($result->num_rows > 0) {
         $usuario = mysqli_fetch_assoc($result);
         $nombre = $usuario['nombre'];
         $activo = $usuario['activo'];
         $tipo_user = $usuario['tipo_user'];

        if ($activo == 1) {
            


            
        }else {
            echo "<script>alert('Su cuenta está inactiva. Por favor, contacte al administrador.'); window.location.href = 'login.php';</script>";
            exit;
        } 


    }else{
        echo "Credenciales inválidas";
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Iniciar Sesión</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" type="favicon" href="img/icono.jpg">

    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
      body{
        background:  #ff6f00;
        background: linear-gradient(to right, #ff6f00, #ffe259);
      }
      .bg{
        background-image: url(img/login.jpg);
        background-position: center center;
        background-size: cover;
      }
    </style>
  </head>
  <body>
   <?php
include 'nav.php';

?>
    <main >
      <div class="container w-100 bg-orange rounded shadow my-5">
        <div class="row ">
          <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded"></div>
          <div class="col bg-white p-5 rounded-end">
            <div class="text-end">
              <a href="index.html"><img src="img/icono.jpg" alt="logo" width="68" class="rounded-circle" title="Volver a la página de inicio" /></a>
            </div>
            <h2 class="text-center fw-bold py-5">Iniciar Sesión</h2>

            <!-- Formulario de inicio de sesión -->
            <form action="login.php" method="POST">
              <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required />
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required />
              </div>
              <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" value="" id="mantener-sesion" />
                <label class="form-check-label" for="mantener-sesion"> Mantener sesión iniciada </label>
              </div>
              <div class="my-3">
                <span>¿No tienes una cuenta? <a href="registro.html">Regístrate aquí</a></span> <br>
                <span><a href="#">Recuperar tu contraseña</a></span>
              </div>
              <div class="text-center my-5">
                <button type="submit" class="btn btn-outline-warning w-50">Iniciar Sesión</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>



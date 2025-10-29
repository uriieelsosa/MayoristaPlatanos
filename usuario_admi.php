<?php

   require 'db_conn.php';
    $sql="select * from usuario";
    $resultado=$conexion->query($sql);
    $resultado->fetch_all(MYSQLI_ASSOC);


?> 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayorista platanos</title>
    
<link rel="icon" type="favicon" href="img/icono.jpg">

    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  

  <?php
include 'nav.php';

?>

    <main class="py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10">
            <h1 class="h3 text-center mb-4">Admin de usuarios</h1>
            
            
            <div class="d-flex justify-content-end mb-3">
            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalCrearSysAdmin">
              <i class="fas fa-user-plus"></i> Crear SysAdmin</button>
              <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalCrearAdmin">
              <i class="fas fa-user-plus"></i> Crear administrador</button>
              <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalCrearUsuario">
              <i class="fas fa-user-plus"></i> Crear usuario</button>
            </div>

      

            <div class="table-responsive">
              <table class="table table-dark table-striped align-middle">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tipo de usuario</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                       <?php foreach ($resultado as $usuario): ?>
                  <tr>
                    <th scope="row"><?php echo $usuario['id']; ?></th>
                    <td><?php echo $usuario['nombre']; ?></td>
                    <td><?php echo $usuario['mail']; ?></td>
                    <td><?php echo $usuario['activo']; ?></td>
                    <td><?php echo $usuario['tipo_user']; ?></td>
                    <td>
                      <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="btn btn-success">Editar</button>
                        <button type="button" class="btn btn-danger">Desactivar</button>
                        <button type="button" class="btn btn-primary">Contraseña</button>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  
                
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>

       <!-- modal de creacion de SysAdmin -->

  <div class="modal fade" id="modalCrearSysAdmin" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content bg-dark text-light">
         <div class="modal-header">
         <h5 class="modal-title" id="modalLabel">Crear Super Administrador</h5>
         <button type="button" class="close text-light" data-dismiss="modal" aria-label="Cerrar">
         <span aria-hidden="true">&times;</span> </button>
        </div>
      <div class="modal-body">
         <form action="registro.php" method="POST">
          <input type="hidden" class="form-control" id="scope" name="scope" value="sysAdmin">
       <?php
        include 'newUser_form.php';
       ?>
         <button type="submit" class="btn btn-primary w-100">Crear</button>
         </form>
      </div>
    </div>
  </div>
</div>

<!-- modal de creacion de usuario -->

  <div class="modal fade" id="modalCrearAdmin" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content bg-dark text-light">
         <div class="modal-header">
         <h5 class="modal-title" id="modalLabel">Crear Administrador</h5>
         <button type="button" class="close text-light" data-dismiss="modal" aria-label="Cerrar">
         <span aria-hidden="true">&times;</span> </button>
        </div>
      <div class="modal-body">
        <form action="registro.php" method="POST">
          <input type="hidden" class="form-control" id="scope" name="scope" value="admin">
       <?php
        include 'newUser_form.php';
       ?>
         <button type="submit" class="btn btn-primary w-100">Crear</button>
         </form>
      </div>
    </div>
  </div>
</div>

<!-- modal de creacion de usuario -->

  <div class="modal fade" id="modalCrearUsuario" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content bg-dark text-light">
         <div class="modal-header">
         <h5 class="modal-title" id="modalLabel">Crear usuario</h5>
         <button type="button" class="close text-light" data-dismiss="modal" aria-label="Cerrar">
         <span aria-hidden="true">&times;</span> </button>
        </div>
      <div class="modal-body">
         <form action="registro.php" method="POST">
          <input type="hidden" class="form-control" id="scope" name="scope" value="user">
       <?php
        include 'newUser_form.php';
       ?>
         <button type="submit" class="btn btn-primary w-100">Crear</button>
         </form>
      </div>
    </div>
  </div>
</div>

    </main>

  
    <script>
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll("form[action='registro.php']").forEach(form => {
    form.addEventListener("submit", function (e) {
      const pass1 = form.querySelector("#password1")?.value || form.querySelector("#password")?.value;
      const pass2 = form.querySelector("#password2")?.value;
      const errorDiv = form.querySelector("#error-msg");

      if (pass1 !== pass2) {
        e.preventDefault();
        errorDiv.textContent = "❌ Las contraseñas no coinciden";
        return false;
      } else {
        errorDiv.textContent = "";

         if (pass1.length < 6 || !/[a-zA-Z]/.test(pass1) || !/[0-9]/.test(pass1)) {
        e.preventDefault();
        if (errorDiv) errorDiv.textContent = "⚠️ Mínimo 6 caracteres, una letra y un número";
        return false;
      }

      if (pass1.length > 20) {
        e.preventDefault();
        if (errorDiv) errorDiv.textContent = "⚠️ Máximo 20 caracteres";
        return false;
      }
      if (errorDiv) errorDiv.textContent = "";
      }
      form.addEventListener("input", function () {
        const errorDiv = form.querySelector("#error-msg");
        if (errorDiv) errorDiv.textContent = "";
      });

    });
  });
});
</script>
  </body>
</html>


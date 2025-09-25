<?php

    $conexion = mysqli_connect('localhost', 'root', '', 'mayorista-platanos');
    $sql="select * from usuario";
    $resultado=$conexion->query($sql);
    $resultado->fetch_all(MYSQLI_ASSOC);


?>

<div class="table-responsive">
              <table class="table table-dark table-striped align-middle">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Status</th>
                    <th scope="col">Admin</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultado as $usuario): ?>
                  <tr>
                    <th scope="row"><?php echo $usuario['id']; ?></th>
                    <td><?php echo $usuario['nombre']; ?></td>
                    <td><?php echo $usuario['mail']; ?></td>
                    <td><?php echo $usuario['activo']; ?></td>
                    <td><?php echo $usuario['admin']; ?></td>
                    <td>
                      <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="btn btn-success">Editar</button>
                        <button type="button" class="btn btn-danger">Desactivar</button>
                        <button type="button" class="btn btn-primary">Contraseña</button>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>

          </div>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD MANUEL ROMERO</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="js/ajax.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.validate.js"></script>
  <script src="js/validate.js"></script>


</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">ManuelRomero.co</a>
      </div>
    </nav>
    <div class="container">
      <div class="starter-template">
        <h1>CRUD PHP+Mysql+AJAX</h1>
        <p class="lead">Aplicación gestión de clientes</p>
        <button type="button" onclick="Nuevo();" class="btn btn-primary btn-lg" >
          <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Nuevo
        </button>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">Lista de Usuarios</div>
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Edad</th>
              <th>Email</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
          <?php
          	require("clases/conexion.php");
          	$con = Conectar();
          	$sql = "SELECT id, nombres, apellidos, edad, email FROM datos";
          	$stmt = $con->prepare($sql);
          	$result = $stmt->execute();
          	$rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
          	foreach ($rows as $row) {
          ?>
			<tr>
                <th scope="row"><?php print($row->id); ?></th>
                <td><?php print($row->nombres); ?></td>
                <td><?php print($row->apellidos); ?></td>
                <td><?php print($row->edad); ?></td>
                <td><?php print($row->email); ?></td>
                <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-danger">Seleccione</button>
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a onclick="eliminar('<?php print($row->id); ?>')">Eliminar</a></li>
                      <li><a onclick="Editar('<?php print($row->id); ?>','<?php print($row->nombres); ?>','<?php print($row->apellidos); ?>','<?php print($row->edad); ?>','<?php print($row->email); ?>');">Actualizar</a></li>
                    </ul>
                  </div>
                </td>
              </tr>

          <?php
          	}
           ?>

             </tbody>
        </table>
      </div>

      <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Nuevo Usuario</h4>
            </div>
            <!-- //formulario -->
            <form role="form" action="" id="FormData" name="frmClientes" onsubmit="Registrar(idP,accion); return false">
                <fieldset>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label>Nombre</label>
                      <input name="nombres" id="nombres" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label>apellidos</label>
                      <input name="apellidos"  class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label>edad</label>
                      <input name="edad" class="form-control" >
                    </div>

                    <div class="form-group">
                      <label>Email</label>
                      <input name="email" class="form-control" >
                    </div>

                    <button type="submit" value="submit" class="btn btn-info btn-lg">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Registrar
                    </button>

                  </div>
              </fieldset>
            </form>
            <script>
            $("#commentForm").validate();
            </script>

            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-circle" data-dismiss="modal"><i class="fa fa-times"></i>x</button>
            </div>
          </div>
        </div>
      </div>

    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/codigo.js"></script>

  </body>
  </html>

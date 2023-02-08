<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>usuarios</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Team Cherry</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="principal.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Documentacion</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Configuracion
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Perfil</a>
            <a class="dropdown-item" href="#">Seguridad</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">permisos</a>
            <a class="dropdown-item" href="usuarios.php">Usuarios</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">cerrar sesion</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>



  <button type="button" class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar</button>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class=" fs-5" id="exampleModalLabel">Crear nuevo usuario</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="usuarios.php" method="post">
            <div class="row">
              <div class="col-6 mb-3">
                <label for="nombre" class="col-form-label ">nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
              </div>
              <div class="col-6 mb-3">
                <label for="usuario" class="col-form-label">usuario:</label>
                <input type="text" class="form-control" id="usuario" name="usuario">
              </div>
              <div class="col-12 mb-3">
                <label for="email" class="col-form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="col mb-3">
                <label for="contrasenia" class="col-form-label">contraseña:</label>
                <input type="password" class="form-control" id="contrasenia" name="pass">
              </div>
              <div class="col mb-3">
                <label for="confirmacion" class="col-form-label">confirmar contraseña:</label>
                <input type="password" class="form-control" id="confirmacion" name="confirmacion">
              </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
        </div>
      </div>
    </div>
  </div>



  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">usuario</th>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
        <th scope="col">contraseña</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="col">1</th>
        <td>vlrusky</th>
        <td>Valeria</th>
        <td>vlrusky@yahoo.com</th>
        <td>*********</th>

      </tr>
      <?php
      if (isset($_POST["usuario"])) {
        $usuario =  $_POST["usuario"];
        $nombre =   $_POST["nombre"];
        $email =    $_POST["email"];
        $pass =     $_POST["pass"];
        $confirmacion = $_POST["confirmacion"];

        if (!empty($usuario)) {
          echo '<tr>
      <th scope="row">2</th>';

          echo '<td> ' . $usuario . '</td>
            <td>' . $nombre . '</td>
            <td>' . $email . '</td>
            <td>*******</td>
            </tr>';
        }
      }
      ?>



    </tbody>
  </table>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>

</html>
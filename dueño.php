<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuarios</title>
    <script src="https://kit.fontawesome.com/6dd4cfbed9.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="d-flex flex-column min-vh-100">

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PET CENTER</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="principal.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="dueño.php">Dueños</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mascotas.php">Mascotas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="medicamentos.php">Medicamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" tabindex="-1" aria-disabled="true">Salir</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="p-4 p-md-5 mb-4 mt-5 rounded text-bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Dueños</h1>
            <p class="lead my-3">A continuacion la lista de dueños registrados.</p>
        </div>
    </div>

    <div class="container">
        <button type="button" class="btn btn-outline-primary btn-lg m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class=" fs-5" id="exampleModalLabel">Añadir nuevo Dueño</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="dueño.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" id="inputEmail4" placeholder="kahn">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Apellido</label>
                                    <input type="apellido" class="form-control" id="inputPassword4" placeholder="miller">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Email</label>
                                    <input type="Email" class="form-control" id="inputAddress" name="email" placeholder="example@live.com">
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Telefono</label>
                                    <input type="text" class="form-control" id="inputAddress2" name="telefono" placeholder="xxxx-xxxx">
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">DUI</label>
                                    <input type="text" class="form-control" id="inputAddress2" name="dui" placeholder="xxxxxxxx-x">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Direccion</label>
                                    <input type="text" class="form-control" id="inputAddress2" name="direccion" placeholder="Calle, avenida, numero de casa">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Departamento</label>
                                    <input type="text" class="form-control" name="departamento" id="inputCity" placeholder="san miguel...">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Municipio</label>
                                    <input type="text" class="form-control" name="municipio" id="inputCity" placeholder="san miguel...">
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
    </div>

    <div class="container">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">nombre</th>
                    <th scope="col">apellido</th>
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
                    $nombre         =     $_POST["nombre"];
                    $apellido       =     $_POST["apellido"];
                    $email          =     $_POST["email"];
                    $direccion      =     $_POST["direccion"];
                    $departamento   =     $_POST["departamento"];
                    $municipio      =     $_POST["municipio"];

                    if (!empty($email)) {
                        echo '<tr>
                             <th scope="row">2</th>';
                        echo    '<td> ' . $usuario . '</td>
                                <td>' . $nombre . '</td>
                                <td>' . $email . '</td>
                                <td>*******</td>
                                </tr>';
                    }
                }
                ?>



            </tbody>
        </table>
    </div>

    <footer class="mt-auto bg-dark text-center text-white ">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <i class="fab fa-facebook"></i>
                </a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <i class="fab fa-twitter"></i>
                </a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <i class="fab fa-google"></i>
                </a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <i class="fab fa-instagram"></i>
                </a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <i class="fab fa-linkedin-in"></i>
                </a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <i class="fab fa-github"></i>
                </a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://github.com/josers77j">Ruben Trejo</a>
        </div>
        <!-- Copyright -->
    </footer>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>medicamentos</title>
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
                        <a class="nav-link" href="dueño.php">Dueños</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mascotas.php">Mascotas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="medicamento.php">Medicamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" tabindex="-1" aria-disabled="true">Salir</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="p-4 p-md-5 mb-4 mt-5  text-bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Medicamentos</h1>
            <p class="lead my-3">A continuacion la lista de medicamentos registrados y en existencia.</p>
        </div>
    </div>

    <div class="container">
    <div class="row">
            <button type="button" class="btn btn-outline-primary btn-lg m-3 col-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar</button>
            <form class="form-inline col-7">
                <div class="row">
                    <div class="col-md-6">
                    <input type="search" class="form-control m-4 col-6" placeholder="Buscar por nombre" aria-label="Search">
                    </div>
                    <div class="col-md-6">
                    <button class="btn btn-outline-success m-4 col-6" type="submit">Buscar</button>
                    </div>
                </div>
                
            </form>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class=" fs-5" id="exampleModalLabel">Añadir nuevo Medicamento</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="medicamento.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Nombre Comercial</label>
                                    <input type="text" class="form-control" name="nombreC" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Nombre Generico</label>
                                    <input type="text" class="form-control" id="" name="nombreG">
                                </div>
                                <div class="col-2">
                                    <label for="inputAddress" class="form-label">Lote</label>
                                    <input type="text" class="form-control" id="" name="lote" placeholder="4">
                                </div>
                                <div class="col-5">
                                    <label for="inputAddress2" class="form-label">Fecha de vencimiento</label>
                                    <input type="text" class="form-control" id="" name="fechaV" placeholder="xx/xx/xx">
                                </div>
                                <div class="col-5">
                                    <label for="inputAddress2" class="form-label">Laboratorio</label>
                                    <input type="text" class="form-control" id="" name="laboratorio">
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Presentacion</label>
                                    <input type="text" class="form-control" id="inputAddress2" name="presentacion" placeholder="tableta...">
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Condiciones de conservacion</label>
                                    <input type="text" class="form-control" id="inputAddress2" name="condicionC" placeholder="Ambiente">
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
            <thead class="table-danger">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre Comercial</th>
                    <th scope="col">Nombre Generico</th>
                    <th scope="col">Lote</th>
                    <th scope="col">Fecha de vencimiento</th>
                    <th scope="col">Laboratorio</th>
                    <th scope="col">Presentacion</th>
                    <th scope="col">Condicion de conservacion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col">1</th>
                    <td>paracetamol</th>
                    <td>paracetamol</th>
                    <td>2</th>
                    <td>05/08/24</th>
                    <td>ilma</th>
                    <td>tableta</th>
                    <td>Frio</th>

                </tr>
                <?php
                if (isset($_POST["nombreC"])) {
                    $nombreC         =     $_POST["nombreC"];
                    $nombreG       =     $_POST["nombreG"];
                    $lote       =     $_POST["lote"];
                    $fechaV          =     $_POST["fechaV"];
                    $laboratorio      =     $_POST["laboratorio"];
                    $presentacion   =     $_POST["presentacion"];
                    $condicionC      =     $_POST["condicionC"];

                    if (!empty($nombreC)) {
                        echo '<tr>
                             <th scope="row">2</th>';
                        echo    '<td> ' . $nombreC . '</td>
                                <td>' . $nombreG . '</td>
                                <td>' . $lote . '</td>
                                <td>' . $fechaV . '</td>
                                <td>' . $laboratorio . '</td>
                                <td>' . $presentacion . '</td>
                                <td>' . $condicionC . '</td>
                                </tr>';
                    }
                }
                ?>



            </tbody>
        </table>
    </div>

  
    <footer class="mt-auto bg-dark text-center text-white ">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://github.com/josers77j">Ruben Trejo</a>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>
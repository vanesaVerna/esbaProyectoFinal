<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xibo 3D</title>
    <link rel="icon" type="image/x-icon" href="images/logox4.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css" />
</head>

<body>
    <!-- menu -->
    <header id="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="nav">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="true">Productos</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="producto.html#1"
                                    onclick="mostrarProducto('1');">Llaveros</a></li>
                            <li><a class="dropdown-item" href="producto.html#2"
                                    onclick="mostrarProducto('2');">Soportes</a></li>
                            <li><a class="dropdown-item" href="producto.html#3" onclick="mostrarProducto('3');">Trabajos
                                    a pedido</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="queEs.html">¿Qué es la impresion 3D?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="nosotros.html">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php">
                            <a class="nav-link" href="contacto.php">Contacto</a>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Ingreso -->
            <div class="img-fluid" style="padding-top: 0px;">
                <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Ingresar
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ingresar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="validacionIngreso" class="img-fluid" method="post">
                                    <div class="form-group row" style="padding: 10px;">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 10px;">
                                        <label for="inputPass" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPass" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div style="text-align:center;">
                                            <button type="button" class="btn btn-primary" onclick="validarIngreso()">Entrar</button>
                                        </div>
                                    </div>
                                </form>
                                <div style="text-align: right;">
                                    <a href="ingreso.php">
                                        <button type="submit" class="btn btn-outline-success">Registrate</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fin ingreso -->
        </nav>
    </header>
    <!-- fin menu-->
    <div style="background-color:White; padding: 20px;">
        <div class="logo" style="text-align: center">
            <img src="images/Recurso 34.png" class="img-fluid" alt="logo">
        </div>
    </div>

    <div id="cuerpo" class="container position-relative">
        <img src="images/fondo rombos multicolores.png" class="img-fluid" alt="logo"
            style="position: relative; right: 0; top: 0; z-index: -50; opacity: 0.1; width: 110%; height: auto;">
        <div class="position-absolute top-0 start-0" style="z-index: 1;">
            <div class="row">
                <div class="col-md-4">
                    <img src="images/foto1.jpg" class="img-fluid" alt="cortante vaca"
                        style="max-width: 500px; max-height: 400px; width: auto; height: auto; padding: 25px; border-radius: 10px; margin-right: 10px; margin-left: 10px;">
                </div>
                <div class="col-md-4">
                    <img src="images/foto2.jpg" class="img-fluid" alt="cortante woody"
                        style="max-width: 500px; max-height: 400px; width: auto; height: auto; padding: 25px; border-radius: 10px; margin-right: 10px; margin-left: 10px;">
                </div>
                <div class="col-md-4">
                    <img src="images/foto3.jpg" class="img-fluid" alt="carcasa termostato"
                        style="max-width: 500px; max-height: 400px; width: auto; height: auto; padding: 25px; border-radius: 10px; margin-right: 10px; margin-left: 10px;">
                </div>
                <div class="col-md-4">
                    <img src="images/foto4.jpg" class="img-fluid" alt="servilletero"
                        style="max-width: 500px; max-height: 400px; width: auto; height: auto; padding: 25px; border-radius: 10px; margin-right: 10px; margin-left: 10px;">
                </div>
                <div class="col-md-4">
                    <img src="images/foto5.jpg" class="img-fluid" alt="porta esponja"
                        style="max-width: 500px; max-height: 400px; width: auto; height: auto; padding: 25px; border-radius: 10px; margin-right: 10px; margin-left: 10px;">
                </div>
                <div class="col-md-4">
                    <img src="images/foto6.jpg" class="img-fluid" alt="lapicero Xibo"
                        style="max-width: 500px; max-height: 400px; width: auto; height: auto; padding: 25px; border-radius: 10px; margin-right: 10px; margin-left: 10px;">
                </div>
                <div class="col-md-4">
                    <img src="images/foto7.jpg" class="img-fluid" alt="lapicero personalizado"
                        style="max-width: 500px; max-height: 400px; width: auto; height: auto; padding: 25px; border-radius: 10px; margin-right: 10px; margin-left: 10px;">
                </div>
                <div class="col-md-4">
                    <img src="images/foto8.jpg" class="img-fluid" alt="lapicero iniciales"
                        style="max-width: 500px; max-height: 400px; width: auto; height: auto; padding: 25px; border-radius: 10px; margin-right: 10px; margin-left: 10px;">
                </div>
                <div class="col-md-4">
                    <img src="images/foto9.jpg" class="img-fluid" alt="lapicero marcos"
                        style="max-width: 500px; max-height: 400px; width: auto; height: auto; padding: 25px; border-radius: 10px; margin-right: 10px; margin-left: 10px;">
                </div>
            </div>
            <!-- pie de pagina -->
            <div id="pieDePagina">
                <footer>
                    <div class="container">
                        <h2>2023 - Programación Web - ESBA - VERNA BARELLA,Vanesa</h2>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script src="js/validacion.js"></script>
    <script src="js/ingreso.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
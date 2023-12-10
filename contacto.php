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
                        <a class="nav-link" href="productos.php">ProductosBD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="queEs.html">¿Qué es la impresion 3D?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros.html">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contacto.php">Contacto</a>
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
                                <form action="controller/ingreso.php" method="post" class="img-fluid" method="post">
                                    <div class="form-group row" style="padding: 10px;">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 10px;">
                                        <label for="inputPass" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="pass" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div style="text-align:center;">
                                            <button type="submit" class="btn btn-primary">Entrar</button>
                                        </div>
                                    </div>
                                </form>
                                <div style="text-align: right;">
                                    <a href="registrar.php">
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
    <div style="text-align:center; padding: 30px; background-color: rgba(247, 220, 220);">
        <h1 style="color: black;">Contacto</h1>
    </div>
    <div class="container position-relative" style="padding: 50px;">
        <div class="fs-5 my-8 text-align" style="background-color: rgba(211, 211, 211, 0.3);">
            <form id="contact-form" class="img-fluid" method="post" action="enviar_correo.php">
                <div class="form-group row" style="padding: 10px;">
                    <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
                    </div>
                </div>
                <div class="form-group row" style="padding: 10px;">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row" style="padding: 10px;">
                    <label for="inputDescripcion" class="col-sm-2 col-form-label">Descripción</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="inputDescripcion" placeholder="Descripción"
                            rows="4"></textarea>
                    </div>
                </div>
                <div class="mb-5" style="padding: 10px;">
                    <label for="exampleFormControlFile1" class="col-sm-2 col-form-label"></label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div style="text-align:center;">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
            <div>
                <img src="images/fondo rombos multicolores.png" class="img-fluid" alt="logo"
                    style="position: absolute; right: 0; top: 0; z-index: -50; opacity: 0.1; width: 110%; height: auto;">
            </div>
            <div id="volver-atras">
                <button onclick="window.scrollTo(0, 0)" class="btn btn-light"
                    style="position: fixed; bottom: 20px; right: 20px;">
                    <a href="index.html" style="text-decoration: none; color: inherit;">
                        <img src="images/24SinFondo.png" style="width: 20px; height: 20px;"> Ir al inicio
                    </a>
                </button>
            </div>
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener datos del formulario
        $nombre = $_POST['inputNombre'];
        $email = $_POST['inputEmail'];
        $descripcion = $_POST['inputDescripcion'];

        // Configurar destinatario
        $destinatario = 'xibo3d@hotmail.com';

        // Asunto y contenido del correo
        $asunto = 'Nuevo mensaje de contacto';
        $mensaje = "Nombre: $nombre\n";
        $mensaje .= "Email: $email\n";
        $mensaje .= "Descripción: $descripcion\n";

        // Cabeceras del correo
        $cabeceras = "From: $email";

        // Enviar el correo
        mail($destinatario, $asunto, $mensaje, $cabeceras);

        // Puedes redirigir a una página de éxito o mostrar un mensaje aquí
        echo "Correo enviado con éxito";
    } else {
        // Redirigir si se intenta acceder directamente al archivo PHP
        header("Location: index.html");
        exit();
    }

    ?>

    <script src="js/validacion.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>
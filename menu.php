<?php
session_start();
if (isset($_SESSION['nombre'])) {
    $nombreUsuario = $_SESSION['nombre'];
    echo "<h4 style='color: black; padding: 1px;'> ¡Bienvenido/a $nombreUsuario a nuestra comunidad en línea!</h4>";
}
?>
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
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="images/logox4.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="productos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="queEs.php">¿Qué es la impresion 3D?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- Ingreso -->
            <!-- Sesion -->
            <?php
            if (isset($_SESSION['nombre'])) {
                // Usuario autenticado
                $nombreUsuario = $_SESSION['nombre'];
                echo "<!-- Sesion -->";
                echo "<div style='display: flex; align-items: center; padding: 40px;'>";
                echo "    <i class='bi bi-box-arrow-right'></i>";
                echo "    <svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='currentColor' class='bi bi-box-arrow-right' viewBox='0 0 16 16'>";
                echo "        <path fill-rule='evenodd' d='M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z'/>";
                echo "        <path fill-rule='evenodd' d='M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z'/>";
                echo "    </svg>";
                echo "    <div style='margin-top: 10px;'>";
                echo "        <a href='controller/cerrar_sesion.php' class='link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover'>";
                echo "            <p style='margin-left: 8px;'>Cerrar Sesión</p>";
                echo "        </a>";
                echo "    </div>";
                echo "</div>";
            } else {
                // Usuario no autenticado, ingreso
                echo "<div style='display: flex; align-items: center; padding: 10px;'>";
                echo "    <button type='button' class='btn btn-outline-dark' data-bs-toggle='modal' data-bs-target='#exampleModal'>";
                echo "        Ingresar";
                echo "    </button>";
                echo "</div>";
            }
            ?>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ingresar</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="controller/ingreso.php" method="post" class="img-fluid" method="post">
                                <div class="form-group row" style="padding: 10px;">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email<span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group row" style="padding: 10px;">
                                    <label for="inputPass" class="col-sm-2 col-form-label">Password<span style="color: red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="password" name="pass" class="form-control" placeholder="Password" required>
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
            <!-- FIN Sesion -->
        </nav>
    </header>
    <!-- fin menu-->
    <script src="js/validacion.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>
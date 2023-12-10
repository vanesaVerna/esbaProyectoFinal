<!DOCTYPE html>
<html lang="en">
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
                        <a class="nav-link active" href="productos.php">ProductosBD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="queEs.html">¿Qué es la impresion 3D?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="nosotros.html">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.html">
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
                                <form id="contact-form" class="img-fluid" method="post">
                                    <div class="form-group row" style="padding: 10px;">
                                        <label for="inputEmail" class="col-sm-0 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 10px;">
                                        <label for="inputPass" class="col-sm-0 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPass"
                                                placeholder="Password">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <div style="text-align:center;">
                                    <button type="submit" class="btn btn-primary">Entrar</button>
                                </div>
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
    <div id="body">
        <?php
        $conn = new mysqli("localhost", "root", "", "esbaproyectofinalbd");
        $result = $conn->query("SELECT * FROM productos");

        echo "<div class='container'>";
        echo "<div class='row row-cols-1 row-cols-md-2 g-4'>";
        while ($producto = $result->fetch_assoc()) {

            $cantFilas = count($producto);
            $id = $producto["id"];
            $nombre = $producto["nombre"];
            $descripcion = $producto["descripcion"];
            $precio = $producto["precio"];
            $foto = $producto["foto"];

            echo "<div class='col'>";
            echo "<div class='card text-center mx-auto' style='width: 400px;'>";
            echo "<div class='card'>";
            echo "<div class='row' style='padding: 20px;'>";
            echo "<h3 class='card-title'>$nombre</h3>";
            echo "<img src='$foto' class='card-img-top img-fluid' alt='$nombre' style='max-width: 100%; max-height: 100%;'>";
            echo "</div>";
            echo "<div class='Producto' style='margin: 10px; padding: 20px; background-color: rgba(247, 220, 220); display: flex; justify-content: space-between;'>";
            echo "<div class='Titulo' style='font-weight: bolder;'>$nombre</div>";
            echo "<div class='Precio' style='font-weight: bolder;'>$$precio</div>";
            echo "</div>";
            echo "<div class='card-body'>";
            echo "<p class='card-text' style='white-space: pre-line; text-align: left;'>";
            $descripcion = $producto["descripcion"];
            $maxCaracteres = 50;
            if (strlen($descripcion) > $maxCaracteres) {
                $descripcionCorta = substr($descripcion, 0, $maxCaracteres) . "...";
                echo "<span class='descripcion-corta'>$descripcionCorta</span>";
                echo "<a href='#' class='expandir-descripcion' onclick='expandirDescripcion(this, \"$descripcion\"); return false;'>Mostrar más</a>";
            } else {
                echo $descripcion;
            }
            echo "</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
        echo "</div>";
        ?>
        <div id="volver-atras">
            <button onclick="window.scrollTo(0, 0)" class="btn btn-light"
                style="position: fixed; bottom: 20px; right: 20px;">
                <a href="index.html" style="text-decoration: none; color: inherit;">
                    <img src="images/24SinFondo.png" style="width: 20px; height: 20px;"> Ir al inicio
                </a>
            </button>
        </div>
    </div>

    <script>
        function expandirDescripcion(boton, descripcionCompleta) {
            var cardBody = boton.parentElement.parentElement;
            var descripcionCorta = cardBody.querySelector('.descripcion-corta');

            descripcionCorta.style.display = 'none';
            var cardText = cardBody.querySelector('.card-text');
            cardText.innerHTML = descripcionCompleta;
        }
    </script>

    <script src="js/validacion.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>
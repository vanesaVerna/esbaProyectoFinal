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
    <?php include 'menu.php'; ?>
    <!-- fin menu-->
    <div style="text-align:center; padding: 30px; background-color: rgba(247, 220, 220);">
        <h1 style="color: black;">Productos</h1>
    </div>
    <div><h1></h1></di>
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
                <a href="index.php" style="text-decoration: none; color: inherit;">
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
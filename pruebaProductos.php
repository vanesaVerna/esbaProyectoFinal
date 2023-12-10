<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PruebaProducto</title>
</head>

<body>
    <h1>Porque soy Admi, cargo productos</h1>
    <div id="body">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div id="1" class="card text-center mx-auto" style="display: none; width: 1000px;">
                <div class="card">
                    <div class="row">
                        <img src="images/foto15.jpg" class="card-img-top" class="img-fluid" alt="llavero personalizado"
                            style="max-width: 50%; max-height: 50%;">
                        <img src="images/foto16.jpg" class="card-img-top" class="img-fluid" alt="llavero nubes"
                            style="max-width: 50%; max-height: 50%;">
                        <th scope="col">foto</th>
                    </div>
                    <div class="Producto"
                        style="margin: 10px; padding: 20px; background-color: rgba(247, 220, 220); display: flex; justify-content: space-between;">
                        <div class="Titulo" style="font-weight: bolder;">
                            <th scope="col">nombre</th>
                        </div>
                        <div class="Precio" style="font-weight: bolder;">
                        <th scope="col">precio</th>
                        </div>
                    </div>

                    <div class="card-body">
                        <p class="card-text" style="white-space: pre-line; text-align: left;"> 
                            <th scope="col">descripcion</th>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Productos-->
    <h2>Agregar Producto</h2>
    <form action="insertar_producto.php" method="POST">
        Nombre: <input type="text" name="nombre"><br>
        Descripción: <textarea name="descripcion"></textarea><br>
        Precio: <input type="number" name="precio"><br>
        Foto: <input type="text" name="foto"><br>
        <input type="submit" value="Agregar Producto">
    </form>
    
    <div class="container">
        <h4 class="text-center mb-4">Listado de productos</h4>
        <div class="table-responsive">
            <table class="table table-primary">
                <?php
                $conn = new mysqli("localhost", "root", "", "esbaproyectofinalbd");
                $result = $conn->query("SELECT * FROM productos");

                //transforma el resultado $query en una matriz  o array de array asociativo
                while ($producto = $result->fetch_assoc()) {
                    //$listalumnos es un array asociativo
                    $listProd[] = $producto;
                }

                $cantFilas = count($listProd);

                for ($i = 0; $i < $cantFilas; $i++) {
                    echo "<tr>";

                    echo "<td>";
                    echo $listProd[$i]["id"];
                    echo "</td>";

                    echo "<td>";
                    echo $listProd[$i]["nombre"];
                    echo "</td>";

                    echo "<td>";
                    echo $listProd[$i]["descripcion"];
                    echo "</td>";

                    echo "<td>";
                    echo $listProd[$i]["precio"];
                    echo "</td>";

                    echo "<td>";
                    echo $listProd[$i]["foto"];
                    echo "</td>";

                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>
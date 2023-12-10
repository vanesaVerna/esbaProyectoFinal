<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap Table with Add and Delete Row Feature</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

</head>

<body>
    <!-- Productos-->
    <div class="container">
        <div class="col-50 mx-auto">
            <h4 class="text-center mb-4">Listado de productos</h4>
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">precio</th>
                            <th scope="col">imagen</th>
                            <th scope="col">edicion</th>
                        </tr>
                    </thead>
                    <tbody>
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

                            echo "<td>";
                            echo "<i class='bi bi-trash mx-2'></i>";
                            echo "<i class='bi bi-pen mx-2'></i>";
                            echo "</td>";

                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Inicio Modal-->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
        data-whatever="@mdo">Open modal for @mdo</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
        data-whatever="@fat">Open modal for @fat</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
        data-whatever="@getbootstrap">Open modal for @getbootstrap</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Modal-->
        <script src="js/administradorProd.js"></script>
</body>

</html>
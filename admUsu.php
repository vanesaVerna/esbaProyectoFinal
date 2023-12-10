<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <!-- Menu Admi-->
  <nav class="navbar bg-body-tertiary img-fluid">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="images/logox4.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top">
        <span class="ms-2">Hola Administrador!</span>
      </a>
      <ul class="nav nav-underline">
        <li class="nav-item">
          <a class="nav-link" href="admProd.php">Administrar Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Administrar Usuarios</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Fin menu Admi-->
  <!-- Productos-->
  <div class="container img-fluid">
    <div class="col-50 mx-auto">
      <h4 class="text-center mb-4">Listado de usuarios</h4>
      <div class="table-responsive">
        <table class="table table-primary">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">nombre</th>
              <th scope="col">apellido</th>
              <th scope="col">email</th>
              <th scope="col">pass</th>
              <th scope="col">rol</th>
            </tr>
          </thead>
          <tbody>
            <div class="text-start">
              <button class="btn btn-outline-success mb-3 " data-bs-toggle='modal' data-bs-target='#createUsu'>
                Agregar Usuario</button>
            </div>
            <?php
            $conn = new mysqli("localhost", "root", "", "esbaproyectofinalbd");
            $result = $conn->query("SELECT * FROM login");


            while ($usuarios = $result->fetch_assoc()) {

              $cantFilas = count($usuarios);
              echo "<tr>";

              $id = $usuarios["id"];
              echo "<td>";
              echo $id;
              echo "</td>";

              $nombre = $usuarios["nombre"];
              echo "<td>";
              echo $nombre;
              echo "</td>";

              $apellido = $usuarios["apellido"];
              echo "<td>";
              echo $apellido;
              echo "</td>";

              $email = $usuarios["email"];
              echo "<td>";
              echo $email;
              echo "</td>";

              $pass = $usuarios["pass"];
              echo "<td>";
              echo $pass;
              echo "</td>";

              $rol = $usuarios["rol"];
              echo "<td>";
              echo $rol;
              echo "</td>";

              echo "<td>";
              echo "<a href='#' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='$id'><i class='bi bi-trash mx-2'></i></a>";
              echo "<a href='#' data-bs-toggle='modal' data-bs-target='#updateUsu' id='$id' nom='$nombre' ape='$apellido' email='$email' pass='$pass' rol='$rol'><i class='bi bi-pen mx-2'></i></a>";
              echo "</td>";

              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Create Modal-->
  <div class="modal fade" id="createUsu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">AGREGAR</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="controller/createUsu.php" method="post" onsubmit="return validateForm()">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label"> ¿Queres agregar un usuario?</label>
              <div id="nom"></div>
              <input type="hidden" class="form-control" id="id" name="id">

              <label for="inputId" class="col-sm-2 col-form-label">Nombre:<span style="color: red;">*</span></label>
              <input type="text" class="form-control mb-3" id="nombre" name="nombre" placeholder="ingrese el nombre"
                required>

              <label for="inputApe" class="col-sm-2 col-form-label">Apellido:<span style="color: red;">*</span></label>
              <input type="text" class="form-control mb-3" id="apellido" name="apellido"
                placeholder="ingrese el apellido" required>

              <label for="inputEmail" class="col-sm-2 col-form-label">Email:<span style="color: red;">*</span></label>
              <input type="text" class="form-control mb-3" id="email" name="email" placeholder="ingrese el email"
                required>

              <label for="inputPass" class="col-sm-2 col-form-label">Password:<span style="color: red;">*</span></label>
              <input type="text" class="form-control mb-3" id="pass" name="pass" placeholder="ingrese una password"
                required>

              <label for="inputRol" class="col-sm-2 col-form-label">Rol:<span style="color: red;">*</span></label>
              <input type="text" class="form-control mb-3" id="rol" name="rol" placeholder="ingrese el rol" required>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Agregar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Fin Create Modal-->

  <!-- Edit Modal-->
  <div class="modal fade" id="updateUsu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="controller/editUsu.php" method="post">
            <div class="mb-3">
              <input type="hidden" class="form-control" id="idUpd" name="idUpd">
              <input type="text" class="form-control mb-3" id="nomUpd" name="nomUpd" placeholder="Nombre">
              <input type="text" class="form-control mb-3" id="apeUpd" name="apeUpd" placeholder="Apellido">
              <input type="text" class="form-control mb-3" id="emailUpd" name="emailUpd" placeholder="Email">
              <input type="text" class="form-control mb-3" id="passUpd" name="passUpd" placeholder="Password">
              <input type="text" class="form-control mb-3" id="rolUpd" name="rolUpd" placeholder="Rol">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Editar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Fin Edit Modal-->

  <!-- Delete Modal-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">ELIMINAR</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="controller/deleteProd.php" method="post">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Estas a punto de eliminar el usuario ¿Estas
                seguro?</label>
              <div id="nom"></div>
              <input type="hidden" class="form-control" id="id" name="id">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Fin Delete Modal-->

  <script src="js/administradorUsu.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
  <script>
    function validateForm() {
      var nombre = document.getElementById("nombre").value;
      var apellido = document.getElementById("apellido").value;
      var email = document.getElementById("email").value;
      var pass = document.getElementById("pass").value;
      var rol = document.getElementById("rol").value;

      if (nombre === "" || apellido === "" || email === "" || pass === "" || rol === "") {
        alert("Por favor, completa todos los campos");
        return false;
      }
      return true;
    }
  </script>

</body>

</html>
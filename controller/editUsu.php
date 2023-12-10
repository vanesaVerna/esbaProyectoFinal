<?php 
$idUpd = $_POST["idUpd"];
$nomUpd = $_POST["nomUpd"];
$apeUpd = $_POST["apeUpd"];
$emailUpd = $_POST["emailUpd"];
$passUpd = $_POST["passUpd"];
$rolUpd = $_POST["rolUpd"];


$conn=new mysqli("localhost","root","","esbaproyectofinalbd");
// Realiza la consulta SQL con los nombres de campo correctos
$result=$conn->query("UPDATE login SET nombre='$nomUpd', apellido='$apeUpd', email='$emailUpd', pass='$passUpd', rol='$rolUpd' WHERE id=$idUpd");

if ($result && $conn->affected_rows > 0) {
    // Si la edición fue exitosa y se realizaron cambios en la base de datos
    echo "<script>
        setTimeout(function() {
            var mensajeExito = document.createElement('div');
            mensajeExito.textContent = 'El usuario se editó exitosamente';
            mensajeExito.style.cssText = 'position: top; left: 50%; background-color: #3ABA38; color: black; padding: 10px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); z-index: 10;';
            document.body.appendChild(mensajeExito);
            setTimeout(function() {
                mensajeExito.style.display = 'none';
                window.location.href = '../admUsu.php';
            }, 1000); // Muestra el mensaje durante 1 segundos (1000 milisegundos)
        }, 500); // Espera 0.5 segundos (500 milisegundos) antes de mostrar el mensaje
    </script>";
} elseif ($result && $conn->affected_rows === 0) {
    // Si la edición fue exitosa pero no se realizaron cambios en la base de datos
     echo "<script>
        setTimeout(function() {
            var mensajeExito = document.createElement('div');
            mensajeExito.textContent = 'No se edito ningun campo';
            mensajeExito.style.cssText = 'position: top; left: 50%; background-color: #EFF52C; color: black; padding: 10px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); z-index: 10;';
            document.body.appendChild(mensajeExito);
            setTimeout(function() {
                mensajeExito.style.display = 'none';
                window.location.href = '../admUsu.php';
            }, 1000); // Muestra el mensaje durante 1 segundos (1000 milisegundos)
        }, 500); // Espera 0.5 segundos (500 milisegundos) antes de mostrar el mensaje
    </script>";
} else {
    // Si hubo un error en la edición
    echo "<script>
        setTimeout(function() {
            var mensajeError = document.createElement('div');
            mensajeError.textContent = 'No se pudo editar el usuario';
            mensajeError.style.cssText = 'position: fixed; top: 10%; left: 10%; background-color: #FF0000; color: black; padding: 10px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); z-index: 9999;';
            document.body.appendChild(mensajeError);
            setTimeout(function() {
                mensajeError.style.display = 'none';
                window.location.href = '../admUsu.php';
            }, 2000); // Muestra el mensaje durante 2 segundos (2000 milisegundos)
        }, 500); // Espera 0.5 segundos (500 milisegundos) antes de mostrar el mensaje
    </script>";
}
$conn->close();
?>
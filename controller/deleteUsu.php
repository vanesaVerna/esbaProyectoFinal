<?php 
$id=$_POST["id"];

$conn=new mysqli("localhost","root","","esbaproyectofinalbd");

$result=$conn->query("DELETE FROM login WHERE id=$id");

if ($result) {
    // Si elimino exitosamente
    echo "<script>
        setTimeout(function() {
            var mensajeExito = document.createElement('div');
            mensajeExito.textContent = 'El usuario se elimino exitosamente';
            mensajeExito.style.cssText = 'position: top; left: 50%; background-color: #3ABA38; color: black; padding: 10px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); z-index: 10;';
            document.body.appendChild(mensajeExito);
            setTimeout(function() {
                mensajeExito.style.display = 'none';
                window.location.href = '../admUsu.php';
            }, 1000); // Muestra el mensaje durante 1 segundos (1000 milisegundos)
        }, 500); // Espera 0.5 segundos (500 milisegundos) antes de mostrar el mensaje
    </script>";
} else {
    // Si hubo un error en la eliminacion
    echo "<script>
        setTimeout(function() {
            var mensajeError = document.createElement('div');
            mensajeError.textContent = 'No se pudo eliminar el usuario';
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
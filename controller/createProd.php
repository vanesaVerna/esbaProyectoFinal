<?php 
$id=$_POST["id"];
$nombre=$_POST["nombre"];
$descripcion=$_POST["descripcion"];
$precio=$_POST["precio"];
$foto=$_POST["foto"];

$conn=new mysqli("localhost","root","","esbaproyectofinalbd");

$result=$conn->query("INSERT INTO productos (nombre, descripcion, precio, foto) VALUES ('$nombre','$descripcion','$precio','$foto')");

if ($result) {
    // Si creo exitosamente
    echo "<script>
        setTimeout(function() {
            var mensajeExito = document.createElement('div');
            mensajeExito.textContent = 'El producto se creo exitosamente';
            mensajeExito.style.cssText = 'position: top; left: 50%; background-color: #3ABA38; color: black; padding: 10px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); z-index: 10;';
            document.body.appendChild(mensajeExito);
            setTimeout(function() {
                mensajeExito.style.display = 'none';
                window.location.href = '../admProd.php';
            }, 1000); // Muestra el mensaje durante 1 segundos (1000 milisegundos)
        }, 500); // Espera 0.5 segundos (500 milisegundos) antes de mostrar el mensaje
    </script>";
} else {
    // Si hubo un error en la creacion
    echo "<script>
        setTimeout(function() {
            var mensajeError = document.createElement('div');
            mensajeError.textContent = 'No se pudo crear el producto';
            mensajeError.style.cssText = 'position: fixed; top: 10%; left: 10%; background-color: #FF0000; color: black; padding: 10px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); z-index: 9999;';
            document.body.appendChild(mensajeError);
            setTimeout(function() {
                mensajeError.style.display = 'none';
                window.location.href = '../admProd.php';
            }, 2000); // Muestra el mensaje durante 2 segundos (2000 milisegundos)
        }, 500); // Espera 0.5 segundos (500 milisegundos) antes de mostrar el mensaje
    </script>";
} 
$conn->close();
?>

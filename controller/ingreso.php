<?php
session_start(); // Inicia la sesión si no lo has hecho ya

$email = $_POST["email"] ?? null; // Validación para el email
$pass = $_POST["pass"] ?? null; // Validación para la contraseña

// Si no se ha enviado el email o la contraseña, redirige a una página de error o muestra un mensaje
if (!$email || !$pass) {
    header("Location: ../error.php");
    exit();
}

$conn = new mysqli("localhost", "root", "", "esbaproyectofinalbd");
$result = $conn->query("SELECT * FROM login WHERE email='$email' AND pass='$pass'");

// Si el usuario existe en la base de datos
if ($user = $result->fetch_assoc()) {
    if ($user['pass'] === $pass) {
    $rol = $user['rol'];

    if ($rol === 'admin') {
        // Admin
        header("Location: ../admProd.php");
        exit();
    } else {
        // Usuario
        $_SESSION['nombre'] = $user['nombre']; // Guarda el nombre en la sesión
        header("Location: ../soyUsu.php");
        exit();
    }
} else {
    // Contraseña incorrecta
    $_SESSION['error'] = "Contraseña incorrecta";
    header("Location: ../menu.php"); // Redirige a la página de inicio de sesión con el mensaje de error
    exit();
}
} else {
// No está registrado
header("Location: ../registrar.php?mensaje=Vemos+que+no+estas+registrado,+por+favor+llená+este+formulario");
exit();
}
?>

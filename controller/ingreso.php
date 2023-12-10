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

<?php 
$email=$_POST["email"];
$pass=$_POST["pass"]; 



$conn=new mysqli("localhost","root","","esbaproyectofinalbd");
$result=$conn->query("SELECT * FROM login WHERE email='$email' AND pass='$pass'");

if ($user = $result->fetch_assoc()) {
    $rol = $user['rol'];

    if ($rol === 'admin') {
    //administrado
        header("Location: ../view/admProd.php");
        exit();
    } else {
        echo "Soy Usuario";
    }
} else {
    echo"No estoy registrado";
}
?>
</body>
</html>
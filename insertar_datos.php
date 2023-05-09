<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "jamaytech";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Error al conectar con la base de datos: " . $conn->connect_error);
}


$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$estado = $_POST['estado'];
$correo = $_POST['correo'];
$falla = $_POST['falla'];


$sql = "INSERT INTO tabla_de_datos (marca, modelo, garantia, correo, fallas) VALUES ('$marca', '$modelo', '$estado', '$correo', '$falla')";

if ($conn->query($sql) === TRUE) {
  echo "Los datos se han guardado correctamente.";
} else {
  echo "Error al guardar los datos: " . $conn->error;
}


$conn->close();
?>

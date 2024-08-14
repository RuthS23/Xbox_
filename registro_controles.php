<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "controles";

// Crear conexión
$conn = new mysqli($id, $name, $precio);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = precio_hash($_POST['precio'], PRECIO_DEFAULT); 

// Insertar datos en la base de datos
$sql = "INSERT INTO controles (id, nombre, precio) VALUES ('$id', '$nombre', '$precio')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

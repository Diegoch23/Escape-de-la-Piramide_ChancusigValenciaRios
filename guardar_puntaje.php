<?php
// Conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "videojuego");

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del cliente (Unity)
$nombre = $_POST['nombre'];
$puntaje = $_POST['puntaje'];
$tiempo = $_POST['tiempo'];

// Sentencia preparada para evitar inyecciones SQL
$stmt = $conn->prepare("INSERT INTO jugadores (nombre, puntaje, tiempo) VALUES (?, ?, ?)");
$stmt->bind_param("sis", $nombre, $puntaje, $tiempo); // "s" para string, "i" para entero, "s" para string (tiempo como string)

// Ejecutar la consulta
if ($stmt->execute()) {
    $response = array("status" => "success", "message" => "Nuevo registro creado exitosamente");
} else {
    $response = array("status" => "error", "message" => "Error: " . $stmt->error);
}

// Convertir la respuesta a JSON
echo json_encode($response);

// Cerrar la conexión
$conn->close();
?>

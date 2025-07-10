<?php
// Conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "videojuego");

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener todos los puntajes ordenados por tiempo ascendente y puntaje descendente
$sql = "SELECT * FROM jugadores ORDER BY tiempo ASC, puntaje DESC";
$result = $conn->query($sql);

$jugadores = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $jugadores[] = $row;
    }
    // Retornar los datos en formato JSON
    $response = array("status" => "success", "ranking" => $jugadores);
} else {
    // Si no hay registros, devolver un array vacío
    $response = array("status" => "error", "message" => "No hay registros", "ranking" => []);
}

// Convertir la respuesta a JSON
echo json_encode($response);

// Cerrar la conexión
$conn->close();
?>

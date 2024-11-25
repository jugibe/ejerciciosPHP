<?php
$servername = "localhost";
$username = "juanjo";
$password = "1234";
$dbname = "prueba";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Habilitar el reporte de errores y excepciones

try {
    // Crear conexión
    $mysqli = new mysqli($servername, $username, $password, $dbname);
    $mysqli->set_charset("utf8mb4"); // Establecer el conjunto de caracteres
} catch (exception $e) {
    http_response_code(500); // Error interno del servidor
    echo json_encode(["error" => "Conexión fallida: " . $conn->connect_error]);
    exit;
}
?>

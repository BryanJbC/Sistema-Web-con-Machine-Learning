<?php
include 'conexion.php';
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu servidor MySQL tiene un nombre diferente
$username = "root"; // Cambia esto al nombre de usuario de tu base de datos
$password = ""; // Cambia esto a tu contraseña de la base de datos
$database = "dashboard_notas"; // Nombre de la base de datos


// Consulta SQL para obtener los datos de los estudiantes
$sql = "SELECT * FROM estudiantes";
$resultado = $conn->query($sql);

// Verificar si hay resultados
if ($resultado->num_rows > 0) {
    // Mostrar datos de los estudiantes en una tabla
    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Nota 1</th><th>Nota 2</th><th>Nota 3</th><th>Nota 4</th></tr>";
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr><td>" . $fila["id"] . "</td><td>" . $fila["nombre"] . "</td><td>" . $fila["nota1"] . "</td><td>" . $fila["nota2"] . "</td><td>" . $fila["nota3"] . "</td><td>" . $fila["nota4"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

// Cerrar conexión
$conn->close();
?>

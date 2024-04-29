<?php
// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['guardar'])) {
    // Obtener los datos del formulario
    $id_alumno = $_POST['id_alumno'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];

    // Actualizar las notas del alumno en la base de datos
    $sql = "UPDATE estudiantes SET nota1='$nota1', nota2='$nota2', nota3='$nota3', nota4='$nota4' WHERE id='$id_alumno'";

    if ($conn->query($sql) === TRUE) {
        echo "Notas actualizadas correctamente.";
    } else {
        echo "Error al actualizar las notas: " . $conn->error;
    }
}
?>

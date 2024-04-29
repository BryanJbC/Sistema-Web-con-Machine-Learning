<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Notas</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Editar Notas</h1>
    </header>
    <main>
        <div class="sidebar">
            <!-- Contenido de la barra lateral -->
            <div class="profile">
                <img src="img/foto.jpg" alt="Foto de perfil del alumno">
                <!-- Modificación aquí: Cambiar el texto a mostrar -->
                <h2>Alumno ID: <?php echo isset($_GET['id']) ? $_GET['id'] : "N/A"; ?></h2>
            </div>
        </div>
        <div class="content">
            <!-- Contenido principal de la página de editar notas -->
            <h2>Editar Notas del Alumno</h2>
            <form action="guardar_notas.php" method="post">
                <input type="hidden" name="id_alumno" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ""; ?>">
                <table>
                    <thead>
                        <tr>
                            <th>Nota 1</th>
                            <th>Nota 2</th>
                            <th>Nota 3</th>
                            <th>Nota 4</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="number" name="nota1" value="<?php echo obtener_nota(1); ?>"></td>
                            <td><input type="number" name="nota2" value="<?php echo obtener_nota(2); ?>"></td>
                            <td><input type="number" name="nota3" value="<?php echo obtener_nota(3); ?>"></td>
                            <td><input type="number" name="nota4" value="<?php echo obtener_nota(4); ?>"></td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" name="guardar">Guardar Notas</button>
            </form>
        </div>
    </main>
</body>

</html>

<?php
// Función para obtener las notas del alumno de la base de datos
function obtener_nota($numero_nota)
{
    // Aquí deberías conectarte a tu base de datos y obtener la nota del alumno correspondiente
    // Por simplicidad, aquí se retorna un valor aleatorio entre 10 y 20
    return rand(10, 20);
}
?>
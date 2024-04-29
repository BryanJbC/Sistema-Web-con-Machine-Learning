<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Notas</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Dashboard de Notas</h1>
    </header>
    <main>
        <div class="sidebar">
            <!-- Contenido de la barra lateral -->
            <div class="profile">
                <img src="img/foto.jpg" alt="Foto de perfil del profesor">
                <h2>Profesor Juan Pérez</h2>
            </div>
            <div class="students">
                <h3>Alumnos a cargo: 20</h3>
            </div>
            <div class="course">
                <h3>Curso:</h3>
                <p>Aritmética</p>
            </div>
        </div>
        <div class="content">
            <!-- Contenido principal del dashboard -->
            <h2>Notas de los Alumnos</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Alumno</th>
                        <th>Nota 1</th>
                        <th>Nota 2</th>
                        <th>Nota 3</th>
                        <th>Nota 4</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Crear 20 filas con los datos de los estudiantes
                    for ($i = 1; $i <= 20; $i++) {
                        echo "<tr>";
                        // Modificación aquí: Enlazar el ID del alumno con editar_notas.php
                        echo "<td><a href='editar_notas.php?id=$i'>$i</a></td>";
                        echo "<td>Nombre del Estudiante $i</td>"; // Puedes reemplazar con nombres reales
                        // Generar notas aleatorias para cada estudiante (del 10 al 20)
                        for ($j = 0; $j < 4; $j++) {
                            $nota = rand(10, 20);
                            echo "<td>$nota</td>";
                        }
                        // Generar una fase aleatoria (Fase 1 o Fase 2)
                        $fase = rand(1, 2);
                        echo "<td>Fase $fase</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>

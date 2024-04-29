document.addEventListener("DOMContentLoaded", function() {
    // Obtener todas las celdas de ID de estudiante
    var celdasEstudiante = document.querySelectorAll("[id^='estudiante']");
    
    // Añadir evento de clic a cada celda
    celdasEstudiante.forEach(function(celda) {
        celda.addEventListener("click", function() {
            // Obtener el ID del estudiante desde el contenido de la celda
            var idEstudiante = this.textContent;
            
            // Redireccionar a la página deseada con el ID del estudiante como parámetro
            window.location.href = "editar_notas.php?id=" + idEstudiante;
        });
    });
});



<div class="resultados">
<?php
include 'libreria.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $materia = $_POST['materia'];

    if (!empty($materia)) {
        $calculoNotas = new CalculoNotas();

 
        $promedio = $calculoNotas->obtenerPromedio($materia);

        if ($promedio !== null) {
            $calificacion = $calculoNotas->obtenerCalificacion($promedio);

            echo "<h2>Resultados de: $materia</h2>";
            echo "<p>Promedio Final: " . number_format($promedio, 2) . "</p>";
            echo "<p>Calificación: $calificacion</p>";
        } else {
            echo "<p>Error: Materia no válida.</p>";
        }
    } else {
        echo "<p>Error: Debes seleccionar una materia.</p>";
    }
}
?>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Notas</title>
    <link rel="stylesheet" href="final.css">
</head>
<body>
    <div class="contenedor">
        <div class="calcular">
            <h2>Cálculo de Promedio de Notas Final</h2>
        <form class="formulario" method="POST">
            <label for="materia">Selecciona una materia:</label>
            <select name="materia" id="materia" required class="input-field">
                <option value="">Seleccionar</option>
                <option value="Matemática">Matemáticas</option>
                <option value="Ciencias Sociales">Ciencias Sociales</option>
                <option value="Desarrollo de App">Desarrollo de App</option>
                <option value="Lengua Española">Lengua Española</option>
            </select><br><br>

            <button type="submit" class="submit-btn">Calcular Nota</button>
        </form>
        </div>
    </div>
</body>
</html>


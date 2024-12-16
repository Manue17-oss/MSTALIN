<?php

class CalculoNotas {
    private $notas;

    public function __construct() {

        $this->notas = [
            "Matemática" => [
                "notas" => [85, 90, 78, 88],
                "examen_final" => 92
            ],
            "Ciencias Sociales" => [
                "notas" => [72, 68, 75, 80],
                "examen_final" => 78
            ],
            "Desarrollo de App" => [
                "notas" => [92, 89, 94, 90],
                "examen_final" => 88
            ],
            "Lengua Española" => [
                "notas" => [65, 70, 68, 60],
                "examen_final" => 55
            ]
        ];
    }

    public function obtenerPromedio($materia) {
        if (isset($this->notas[$materia])) {
            // Sumar las notas y agregar el examen final
            $notaMateria = $this->notas[$materia]["notas"];
            $notaExamenFinal = $this->notas[$materia]["examen_final"];
            $promedio = (array_sum($notaMateria) + $notaExamenFinal) / (count($notaMateria) + 1);
            return $promedio;
        }
        return null;
    }

    public function obtenerCalificacion($promedio) {
        if ($promedio < 70) {
            return "Reprobó";
        } elseif ($promedio >= 70 && $promedio <= 79) {
            return "C";
        } elseif ($promedio >= 80 && $promedio <= 89) {
            return "B";
        } elseif ($promedio >= 90 && $promedio <= 100) {
            return "A";
        }
        return "Error en los datos ingresados.";
    }
}
?>

<?php
/* LITERAL C*/

$condicion = $_POST['data'];


$listado = array(
    array(array('Basico' => 25, 'Intermedio' => 15, 'Avanzado' => 10)),  //Ingles
    array(array('Basico' => 10, 'Intermedio' => 5, 'Avanzado' => 2)),  //Frances
    array(array('Basico' => 8, 'Intermedio' => 4, 'Avanzado' => 1)),   //Mandarin
    array(array('Basico' => 12, 'Intermedio' => 8, 'Avanzado' => 4)),   //Ruso
    array(array('Basico' => 30, 'Intermedio' => 15, 'Avanzado' => 10)),  //Portugues
    array(array('Basico' => 90, 'Intermedio' => 25, 'Avanzado' => 67)),  //Japones
);

// Función que recorre el arreglo $listado y muestra una tabla con los datos del curso seleccionado
function Recorrido($cursos, $condicion)
{
    echo " <div class=\"table-responsive\"><table class=\"table table-striped table-bordered\"> <thead><tr><th>Nivel</th><th>Cantidad</th></tr></thead><tbody>";
    // Recorre el curso seleccionado usando el valor de $condicion
    foreach ($cursos[$condicion] as $fila) {
        // Recorre los niveles dentro los cursos y muestra la cantidad de estudiantes
        foreach ($fila as $fila => $elemento) {
            echo "<tr class=\"bg-success\">
                    <th scope=\"row\">" . $fila . "</th>
                    <td>" . $elemento . "</td>
                    </tr>";
        }
    }
    echo "</tbody></table></div>";
}
echo Recorrido($listado, $condicion);

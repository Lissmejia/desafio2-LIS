<?php
/* LITERAL B */

$condicion = $_POST['data'];

$listado = array(
    array(25, 15, 10),  //Ingles
    array(10, 5, 2),   //Frances
    array(8, 4, 1),   //Mandarin
    array(12, 8, 4),   //Ruso
    array(30, 15, 10),  //Portugues
    array(90, 25, 67)  //Japones
);

// Función que convierte un valor numérico (0, 1, 2) en el nombre correspondiente del nivel (Basico, Intermedio, Avanzado)
function nivel($valor)
{
    switch ($valor) {
        case 0:
            return "Basico";
            break;
        case 1:
            return "Intermedio";
            break;
        case 2:
            return "Avanzado";
            break;
    }
}


// Función para recorrer el arreglo listado y mostrar una tabla con los datos del curso que coincide con la 'condicion'
function Recorrido($listado, $condicion)
{
    echo " <div class=\"table-responsive\"><table class=\"table table-striped table-bordered\"> <thead><tr><th>Nivel</th><th>Cantidad</th></tr></thead><tbody>";
    // Se recorre el arreglo listado para ver qué curso corresponde con la 'condicion'
    for ($j = 0; $j < 5; $j++) {
        if ($j == $condicion) {
            // Se recorren los 3 niveles para mostrar la cantidad de estudiantes
            for ($i = 0; $i < 3; $i++) {
                $color = '';
                if ($i == 0) {
                    $color = 'alert alert-success';
                } elseif ($i == 1) {
                    $color = 'alert alert-warning';
                } elseif ($i == 2) {
                    $color = 'alert alert-danger';
                }
                echo "<tr class=\"$color\">
            <th scope=\"row\">" . nivel($i) . "</th>
            <td>" . $listado[$j][$i] . "</td>
            </tr>";
            }
        }
    } //FIN DE FOR
    echo "</tbody></table></div>";
}
echo Recorrido($listado, $condicion);

<?php
/* LITERAL A */

$condicion = $_POST['data'];

$cursos = array (
    "Ingles"=> array('Basico'=> 25,'Intermedio'=>15,'Avanzado'=>10,),
    "Frances"=> array('Basico'=> 10,'Intermedio'=>5,'Avanzado'=>2,),
    "Mandarin"=> array('Basico'=> 8,'Intermedio'=>4,'Avanzado'=>1,),
    "Ruso"=>array('Basico'=> 12,'Intermedio'=>8,'Avanzado'=>4,),
    "Portugues"=>array('Basico'=> 30,'Intermedio'=>15,'Avanzado'=>10,),
    "Japones"=>array('Basico'=> 90,'Intermedio'=>25,'Avanzado'=>67,)
);

    // Función que recorre el arreglo $cursos y muestra una tabla con los datos de los cursos según la condición.
     function Recorrido($cursos, $condicion){
            echo " <div class=\"table-responsive\"><table class=\"table table-striped table-bordered\"> <thead><tr><th>Nivel</th><th>Cantidad</th></tr></thead><tbody>";
            foreach($cursos as $cursos => $nivel){
                // Verifica si el nombre del curso coincide con el valor recibido en 'condicion'
                if ($cursos==$condicion){

                     // Si el curso coincide, recorre los niveles y sus cantidades
                    foreach($nivel as $nivel => $cantidad){
                        echo "<tr class=\"bg-success\">
                        <th scope=\"row\">$nivel </th>
                        <td >$cantidad</td>
                        </tr>";
                    } 
                }  
            }  
            echo "</tbody></table></div>";
        
        }     
        echo Recorrido($cursos,$condicion);
  
?>

<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJv1l6W9pX8nooAFeX6S/Ta5yKU3v6XtZpI9hbhPaFf3hkg0BtbxF39hEem3" crossorigin="anonymous">

<!-- jQuery (versión más reciente) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEJv1l6W9pX8nooAFeX6S/Ta5yKU3v6XtZpI9hbhPaFf3hkg0BtbxF39hEem3" crossorigin="anonymous"></script>

<!-- Popper.js (necesario para Bootstrap 5) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybGzMl2O9xQlKs+1N5meT5om2crDfXrX6XMlGvRA0VAd1P1tx" crossorigin="anonymous"></script>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0Y+gf3b8j4wewo/BPjm5l+bVnZ5g5OLpjjwCm+hPv9jXt+8f" crossorigin="anonymous"></script>


    <script type="text/javascript">
        //FUNCIONES AJAX
        $(document).ready(function() {
            $("#autores").click(function(event) {
                var apellido = $("#apellido").val();
                var nombre = $("#nombre").val();
                var dataString = "apellido=" + apellido + '&nombre=' + nombre;
                $.ajax({
                        type: "POST",
                        url: "gestor.php",
                        data: dataString,
                        success: function(result) {
                            /* GET THE TO BE RETURNED DATA */
                            //$("#resultado").html(result); /* THE RETURNED DATA WILL BE SHOWN IN THIS DIV */
                            LimpiarAutores();
                        }
                    })
                    .done(function(data) {
                        errores = JSON.parse(data);
                        console.log(errores);
                        if (!errores.success) {
                            if (errores.errors_autor.apellido) {
                                $("#apellido-group").addClass("form-control is-invalid");
                                $("#apellido-group").append(
                                    '<div class="text-danger">' + errores.errors_autor.apellido + "</div>"
                                );
                            }
                            if (errores.errors_autor.nombre) {
                                $("#nombre-group").addClass("form-control is-invalid");
                                $("#nombre-group").append(
                                    '<div class="text-danger ">' + errores.errors_autor.nombre + "</div>"
                                );
                            }
                        }
                    })
                $.ajax({
                    type: "GET",
                    url: "impresion.php",
                    data: {
                        consulta: true
                    },
                    success: function(result) {
                        $("#resultado").html(result)
                    }
                })
                event.preventDefault();
            });
        });
    </script>
</head>
<body>
    <div>
    <h1>Ingreso de libros para la biblioteca</h1>
        <form>
        <div id="apellido-group" class="form-group">
                <label for="apellido">Apellido de autor</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido del autor" />
            </div>
            <div id="nombre-group" class="form-group">
                <label for="nombre">Nombre de autor</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del autor" />
            </div>
            <h2>Autores añadidos</h2>
            <div id="resultado"></div>
            <button type="submit" id="autores" class="btn btn-success">
                Agregar autor
            </button>
            <button type="submit" id="mostrar_autor" class="btn btn-success">
                Ver autores añadidos
            </button>
            <br></br>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0I5P5OGgX09LhYY5V5D4VpUzY3yQKjZb40R82Q+U0N7xtQ+6" crossorigin="anonymous"></script>

    <script type="text/javascript">
        // Script que maneja las interacciones con los selectores de cursos y hace solicitudes AJAX
        $(document).ready(function() {
            $("#cursoA").change(function() {
                var opcion = $(this).val();
                var dataString = "data=" + opcion;
                $.ajax({
                    type: "POST",
                    url: "Ejercicio1.A.php",
                    data: dataString,
                    success: function(result) {
                        $("#contA").html(result);
                    }
                });
            });
        });
        $(document).ready(function() {
            $("#cursoB").change(function() {
                var opcion = $(this).val();
                var dataString = "data=" + opcion;
                $.ajax({
                    type: "POST",
                    url: "Ejercicio1.B.php",
                    data: dataString,
                    success: function(result) {
                        $("#contB").html(result);
                    }
                });
            });
        });
        $(document).ready(function() {
            $("#cursoC").change(function() {
                var opcion = $(this).val();
                var dataString = "data=" + opcion;
                $.ajax({
                    type: "POST",
                    url: "Ejercicio1.C.php",
                    data: dataString,
                    success: function(result) {
                        $("#contC").html(result);
                    }
                });
            });
        });
    </script>
    <meta charset="utf-8" />
</head>

<body>
    <!-- Primer selector de cursos -->
    <label for="standard-select">A. Seleccionar un curso de idiomas</label>
    <div class="select">
        <select id="cursoA" name="curso">
            <option value="Ingles">Ingles</option>
            <option value="Frances">Frances</option>
            <option value="Mandarin">Mandarin</option>
            <option value="Ruso">Ruso</option>
            <option value="Portugues">Portugues</option>
            <option value="Japones">Japones</option>
        </select>
        <span class="focus"></span>
    </div>
    <div id="contA">
        <!-- Aquí se mostrarán los resultados para el curso seleccionado de LITERAL A -->
    </div>

    <!-- Segundo selector de cursos -->
    <label for="standard-select">B. Seleccionar un curso de idiomas</label>
    <div class="select">
        <select id="cursoB" name="curso">
            <option value=0>Ingles</option>
            <option value=1>Frances</option>
            <option value=2>Mandarin</option>
            <option value=3>Ruso</option>
            <option value=4>Portugues</option>
            <option value="5">Japones</option>
        </select>
        <span class="focus"></span>
    </div>
    <div id="contB">
        <!-- Aquí se mostrarán los resultados para el curso seleccionado de LITERAL B -->
    </div>

    <!-- Tercer selector de cursos -->
    <label for="standard-select">C. Seleccionar un curso de idiomas</label>
    <div class="select">
        <select id="cursoC" name="curso">
            <option value=0>Ingles</option>
            <option value=1>Frances</option>
            <option value=2>Mandarin</option>
            <option value=3>Ruso</option>
            <option value=4>Portugues</option>
            <option value=5>Japones</option>
        </select>
        <span class="focus"></span>
    </div>
    <div id="contC">
        <!-- Aquí se mostrarán los resultados para el curso seleccionado de LITERAL C -->
    </div>
</body>

</html>
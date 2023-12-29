<!DOCTYPE html>
<html>

<head>
    <title>Ejemplo de Formulario</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <?php
    if (get_magic_quotes_gpc()) {
        echo "magic quotes ON";
    } else {
        echo "magic quotes OFF";
    }
    echo "</br>";

    if (isset($_SERVER['HTTP_IF_NONE_MATCH'])) {
        $ifNoneMatch = $_SERVER['HTTP_IF_NONE_MATCH'];
        echo "Valor de HTTP_IF_NONE_MATCH: " . $ifNoneMatch;
    } else {
        echo "HTTP_IF_NONE_MATCH no está definido en esta solicitud.";
    }

    echo "</br>";
    if (get_magic_quotes_runtime()) {
        echo "magic quotes runtime ON";
    } else {
        echo "magic quotes runtime OFF";
    }
    echo "</br>";
    ?>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre">
    <br>
    <button id="enviar">Enviar</button>
    <br>
    <div id="mensaje"></div>

    <script>
        $(document).ready(function() {
            $('#enviar').click(function() {
                var nombre = $('#nombre').val();

                if (nombre === '') {
                    $('#mensaje').html('Por favor, complete todos los campos.');
                } else {
                    // Realizar una solicitud GET utilizando jQuery
                    $.get('process_form.php', {
                        nombre: nombre
                    }, function(response) {
                        $('#mensaje').html(response);
                    });
                }
            });
        });
    </script>
</body>

</html>
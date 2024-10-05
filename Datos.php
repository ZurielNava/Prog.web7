<?php
    // Capturamos los datos enviados desde el formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    // Verificamos si alguno de los campos está vacío
    if (empty($nombre) || empty($correo)) {
        echo "Por favor, rellene todos los campos."; // Mensaje para el usuario si faltan datos
    } else {
        // Mostramos la información recibida en una tabla
        echo "<h2>Información Recibida:</h2>
              <table border=\"2\" width=\"70%\" align=\"center\">
                  <tr>
                      <td>Nombre</td> <!-- Encabezado de la primera columna -->
                      <td>Correo</td> <!-- Encabezado de la segunda columna -->
                  </tr>
                  <tr>
                      <td><strong>" .($nombre) . "</strong></td> <!-- Mostramos el nombre del usuario -->
                      <td><strong>" .($correo) . "</strong></td> <!-- Mostramos el correo electrónico del usuario -->
                  </tr>
              </table>";
    }
    
    // Espacio adicional y un botón para regresar a la página anterior
    echo '<br>
    <div style="text-align: center;"> <!-- Centramos el botón de regreso -->
    <form action="Practica2U2.html">
    <input type="submit" value="Listo"> <!-- Botón para volver a la página anterior -->
    </form>
    </div>';
?>
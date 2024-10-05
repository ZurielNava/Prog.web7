// Capturamos el formulario y prevenimos su comportamiento por defecto
document.getElementById('formulario').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevenir el envío del formulario y la recarga de la página

    // Capturamos los valores de los inputs
    const nombre = document.getElementById('nombre').value;
    const correo = document.getElementById('correo').value;

    // Validamos que los campos no estén vacíos
    if (nombre && correo) {
        // Mostramos los resultados en la misma página en formato tabla
        document.getElementById('resultado').innerHTML = `
            <h2>Información Recibida:</h2>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                </tr>
                <tr>
                    <td><strong>${nombre}</strong></td>
                    <td><strong>${correo}</strong></td>
                </tr>
            </table>
        `;
    } else {
        alert('Por favor, rellene todos los campos.'); // Mostrar un mensaje si algún campo está vacío
    }
});

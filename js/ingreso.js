function validarAlta() {
    console.log("entro a validar Alta");
    // Obtén los valores de los campos
    var nombre = document.getElementById('inputNombre').value;
    var apellido = document.getElementById('inputApellido').value;
    var email = document.getElementById('inputEmail').value;
    var pass = document.getElementById('inputPass').value;

    // Validar que el correo electrónico y la contraseña estén completos
    if (email.trim() === '' || pass.trim() === '') {
        // Si algún campo está incompleto, muestra una alerta
        alert('Los campos Correo Electronico y Contraseña son obligatorios.');
    } else {
        // Si ambos campos están completos, realiza la solicitud HTTP a tu backend PHP en XAMPP
        // Asegúrate de cambiar la URL según la configuración de tu servidor local
        var url = 'http://localhost/tu_proyecto/registro.php'; // Cambia la URL
        var datos = {
            nombre: nombre,
            apellido: apellido,
            email: email,
            password: pass
        };

        // Realizar la solicitud HTTP con fetch
        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(datos)
        })
        .then(response => response.json())
        .then(data => {
            // Verificar la respuesta del servidor
            if (data.success) {
                // El registro fue exitoso, puedes mostrar la alerta de éxito
                mostrarAlertaExito();
                // También puedes realizar más acciones, como redireccionar al usuario, etc.
                //ACA REDIRECCIONA AL INDEX LOGUEADO
            } else {
                // El registro no fue exitoso, muestra un mensaje de error
                alert('11111Error al intentar registrar. Por favor, inténtalo de nuevo.');
            }
        })
        .catch(error => {
            // Manejar errores de la solicitud HTTP
            console.error('Error en la solicitud:', error);
            alert('2222Error al intentar registrar. Por favor, inténtalo de nuevo.');
        });
    }
}

function mostrarAlertaExito() {
    var alerta = document.getElementById('alertaExito');
    alerta.style.display = 'block';
}
function validarIngreso() {
    console.log("entro a validar Ingresooo");
    // Obtén los valores de los campos
    var email = document.getElementById('inputEmail').value;
    var pass = document.getElementById('inputPass').value;

    // Validar que el correo electrónico y la contraseña estén completos
    if (email.trim() === '' || pass.trim() === '') {
        // Si algún campo está incompleto, muestra una alerta
        alert('Los campos Correo Electronico y Contraseña son obligatorios.');
    } else {
        // Si ambos campos están completos, realiza la solicitud HTTP a tu backend PHP en XAMPP
        // Asegúrate de cambiar la URL según la configuración de tu servidor local
        var url = 'http://localhost/tu_proyecto/registro.php'; // Cambia la URL
        var datos = {
            email: email,
            password: pass
        };

        // Realizar la solicitud HTTP con fetch
        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(datos)
        })
        .then(response => response.json())
        .then(data => {
            // Verificar la respuesta del servidor
            if (data.success) {
                // El registro fue exitoso, puedes mostrar la alerta de éxito
                mostrarAlertaExito();
                // También puedes realizar más acciones, como redireccionar al usuario, etc.
                //ACA REDIRECCIONA AL INDEX LOGUEADO
            } else {
                // El registro no fue exitoso, muestra un mensaje de error
                alert('11111Error al intentar registrar. Por favor, inténtalo de nuevo.');
            }
        })
        .catch(error => {
            // Manejar errores de la solicitud HTTP
            console.error('Error en la solicitud:', error);
            alert('2222Error al intentar registrar. Por favor, inténtalo de nuevo.');
        });
    }
}
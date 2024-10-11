<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";  // Cambia esto si tienes un usuario diferente
$password = "";      // Deja esto si no tienes contraseña configurada en MySQL
$dbname = "dataUsabilidad";  // Reemplaza con el nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Variables para almacenar errores
$errores = [];

// Procesar el formulario cuando se envía
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si se envió un formulario de Registro
    if (isset($_POST['nombre'], $_POST['apellido'], $_POST['edad'], $_POST['ciudad'], $_POST['celular'], $_POST['password'], $_POST['usuario'])) {
        
        // Obtener y limpiar los datos del formulario de registro
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $edad = trim($_POST['edad']);
        $ciudad = trim($_POST['ciudad']);
        $celular = trim($_POST['celular']);
        $pass = trim($_POST['password']);
        $usuario = trim($_POST['usuario']);
        
        // Validar que los campos no estén vacíos
        if (empty($nombre)) $errores['nombre'] = "El campo nombre es obligatorio";
        if (empty($apellido)) $errores['apellido'] = "El campo apellido es obligatorio";
        if (empty($edad)) $errores['edad'] = "El campo edad es obligatorio";
        if (empty($ciudad)) $errores['ciudad'] = "El campo ciudad es obligatorio";
        if (empty($celular)) $errores['celular'] = "El campo celular es obligatorio";
        if (empty($pass)) $errores['password'] = "El campo contraseña es obligatorio";
        if (empty($usuario)) $errores['usuario'] = "El campo usuario es obligatorio";

        // Si no hay errores, proceder a la inserción
        if (count($errores) === 0) {
            // Preparar la consulta SQL para insertar los datos de forma segura
            $stmt = $conn->prepare("INSERT INTO registro (nombre, apellido, edad, ciudad, celular, pass, usuario) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssissss",$nombre, $apellido, $edad, $ciudad, $celular, $pass, $usuario);

            // Ejecutar la consulta
            if ($stmt->execute()) {
                echo "Registro insertado correctamente";
            } else {
                $errores['general'] = "Error en la inserción: " . $stmt->error;
            }
            $stmt->close();
        }
    
    // Capturar los datos de Login
    } elseif (isset($_POST['login_usuario'], $_POST['login_password'])) {
        // Obtener y limpiar los datos del formulario de login
        $usuario_login = trim($_POST['login_usuario']);
        $pass_login = trim($_POST['login_password']);

        // Validar que los campos no estén vacíos
        if (empty($usuario_login)) $errores['login_usuario'] = "El campo usuario es obligatorio";
        if (empty($pass_login)) $errores['login_password'] = "El campo contraseña es obligatorio";

        // Si no hay errores, proceder a la verificación
        if (count($errores) === 0) {
            // Preparar la consulta SQL para verificar el usuario y contraseña
            $stmt = $conn->prepare("SELECT * FROM registro WHERE usuario = ? AND pass = ?");
            $stmt->bind_param("ss", $usuario_login, $pass_login);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // El usuario y la contraseña coinciden
                echo "Inicio de sesión exitoso. ¡Bienvenido $usuario_login!";
            } else {
                // Usuario o contraseña incorrectos
                $errores['general'] = "Usuario o contraseña incorrectos. Por favor, verifica tus datos.";
            }
            $stmt->close();
        }
    }
}

// Cerrar la conexión
$conn->close();
?>

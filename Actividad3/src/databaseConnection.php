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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si se envió un formulario de Registro
    if (isset($_POST['nombre'], $_POST['apellido'], $_POST['edad'], $_POST['ciudad'], $_POST['celular'], $_POST['password'], $_POST['usuario'])) {
        
        // Obtener los datos del formulario de registro
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $ciudad = $_POST['ciudad'];
        $celular = $_POST['celular'];
        $pass = $_POST['password'];
        $usuario = $_POST['usuario'];
        
        // Validar que los campos no estén vacíos
        if (empty($nombre)) $errores['nombre'] = "El campo nombre es obligatorio";
        if (empty($apellido)) $errores['apellido'] = "El campo apellido es obligatorio";
        if (empty($edad)) $errores['edad'] = "El campo edad es obligatorio";
        if (empty($ciudad)) $errores['ciudad'] = "El campo ciudad es obligatorio";
        if (empty($celular)) $errores['celular'] = "El campo celular es obligatorio";
        if (empty($pass)) $errores['password'] = "El campo contraseña es obligatorio";
        if (empty($usuario)) $errores['usuario'] = "El campo usuario es obligatorio";
        
        if (count($errores) === 0) {
            // Crear la consulta SQL para insertar los datos en la tabla `registro`
            $sql = "INSERT INTO registro (nombre, apellido, edad, ciudad, celular, pass, usuario) 
                    VALUES ('$nombre', '$apellido', '$edad', '$ciudad', '$celular', '$pass', '$usuario')";
            
            // Ejecutar la consulta
            if ($conn->query($sql) === TRUE) {
                echo "Registro insertado correctamente";
            } else {
                $errores['general'] = "Error en la inserción: " . $conn->error;
            }
        }
    
    // Capturar los datos de Login

    } elseif (isset($_POST['login_usuario'], $_POST['login_password'])) {
        // Obtener los datos del formulario de login
        $usuario_login = $_POST['login_usuario'];
        $pass_login = $_POST['login_password'];

        // Validar que los campos no estén vacíos
        if (empty($usuario_login)) $errores['login_usuario'] = "El campo usuario es obligatorio";
        if (empty($pass_login)) $errores['login_password'] = "El campo contraseña es obligatorio";

        if (count($errores) === 0) {
            // Crear la consulta SQL para verificar el usuario y contraseña
            $sql = "SELECT * FROM registro WHERE usuario = '$usuario_login' AND pass = '$pass_login'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // El usuario y la contraseña coinciden
                echo "Inicio de sesión exitoso. ¡Bienvenido $usuario_login!";
            } else {
                // Usuario o contraseña incorrectos
                $errores['general'] = "Usuario o contraseña incorrectos. Por favor, verifica tus datos.";
            }
        }
    }
}

// Cerrar la conexión
$conn->close();
?>

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
    echo json_encode(["message" => "Connection failed: " . $conn->connect_error, "error" => true]);
    exit;
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
        
        // Si no hay errores, proceder a la inserción
        if (count($errores) === 0) {
            // Preparar la consulta SQL para insertar los datos de forma segura
            $stmt = $conn->prepare("INSERT INTO registro (nombre, apellido, edad, ciudad, celular, pass, usuario) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssissss", $nombre, $apellido, $edad, $ciudad, $celular, $pass, $usuario);

            // Ejecutar la consulta
            if ($stmt->execute()) {
                // Respuesta en formato JSON
                echo json_encode([
                    "message" => "Registro insertado correctamente",
                    "data" => [
                        "nombre" => $nombre,
                        "apellido" => $apellido,
                        "edad" => $edad,
                        "ciudad" => $ciudad,
                        "celular" => $celular,
                        "usuario" => $usuario
                    ]
                ]);
            } else {
                // Error al insertar
                echo json_encode(["message" => "Error en la inserción: " . $stmt->error, "error" => true]);
            }
            $stmt->close();
        } else {
            // Si hay errores en los datos del formulario
            echo json_encode(["message" => "Errores en el formulario", "errors" => $errores, "error" => true]);
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
                // Inicio de sesión exitoso
                echo json_encode(["message" => "Inicio de sesión exitoso. ¡Bienvenido $usuario_login!", "error" => false]);
            } else {
                // Usuario o contraseña incorrectos
                echo json_encode(["message" => "Usuario o contraseña incorrectos. Por favor, verifica tus datos.", "error" => true]);
            }
            $stmt->close();
        } else {
            // Devolver errores de validación
            echo json_encode(["message" => "Errores en los datos de inicio de sesión", "errors" => $errores, "error" => true]);
        }

    // Obtener los datos de registro en formato JSON
    } elseif (isset($_POST['fetchData']) && $_POST['fetchData'] === 'true') {
        
        // Consulta para obtener los registros
        $sql = "SELECT nombre, apellido, edad, ciudad, celular, usuario FROM registro";
        $result = $conn->query($sql);

        // Verificar si hay resultados
        if ($result->num_rows > 0) {
            $rows = [];
            while($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            // Devolver los datos en formato JSON
            echo json_encode(["message" => "Datos obtenidos correctamente", "data" => $rows, "error" => false]);
        } else {
            echo json_encode(["message" => "No se encontraron registros", "data" => [], "error" => false]);
        }
    }

} else {
    // Método no permitido
    echo json_encode(["message" => "Método no permitido", "error" => true]);
}

// Cerrar la conexión
$conn->close();
?>

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

// Obtener los datos enviados desde el formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$ciudad = $_POST['ciudad'];
$celular = $_POST['celular'];
$pass = $_POST['password'];
$usuario = $_POST['usuario'];

// Verificar si los datos fueron enviados correctamente
if (isset($nombre, $apellido, $edad, $ciudad, $celular, $pass, $usuario)) {
    // Crear la consulta SQL para insertar los datos en la tabla `usuarios`
    $sql = "INSERT INTO registro (nombre, apellido, edad, ciudad, celular, pass, usuario) 
            VALUES ('$nombre', '$apellido', '$edad', '$ciudad', '$celular', '$pass', '$usuario')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "Registro insertado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Por favor, completa todos los campos del formulario.";
}

// Cerrar la conexión
$conn->close();
?>

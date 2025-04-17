<?php
// =====================================================
//  Controlador REST API para gestión de usuarios
// =====================================================
// Este controlador permite realizar operaciones CRUD básicas
// (GET, POST y DELETE) sobre los usuarios utilizando un repositorio
// que implementa la lógica de acceso a datos.
//
// Dependencias:
// - Models/User.php: Modelo de entidad Usuario.
// - Repositories/UserRepositoryInterface.php: Interfaz de acceso a datos.
// - Repositories/UserRepository.php: Implementación del repositorio.
//
// Autor: [Tu nombre o equipo]
// Fecha: [Fecha actual]
// =====================================================

require_once __DIR__ . '/../Models/User.php';
require_once __DIR__ . '/../Repositories/UserRepositoryInterface.php';
require_once __DIR__ . '/../Repositories/UserRepository.php';

// Configuración inicial del encabezado HTTP
header('Content-Type: application/json');

// Método HTTP recibido (GET, POST, DELETE, etc.)
$method = $_SERVER['REQUEST_METHOD'];

// Instanciación del repositorio que maneja la persistencia
$repo = new UserRepository();

// Captura de los datos enviados por el cliente en formato JSON
$input = json_decode(file_get_contents('php://input'), true);

// ============================
// Control de flujo por método
// ============================

switch ($method) {
    case 'GET':
        //  GET: Obtener usuarios

        // Si se proporciona un ID por la URL
        if (isset($_GET['id'])) {
            $user = $repo->find($_GET['id']);
            echo json_encode($user ?? ['error' => 'Usuario no encontrado']);
        }

        // Si el ID viene por el cuerpo en formato JSON
        elseif (isset($input['id'])) {
            $user = $repo->find($input['id']);
            echo json_encode($user ?? ['error' => 'Usuario no encontrado']);
        }

        // Si no se proporciona ningún ID, devolver todos los usuarios
        else {
            echo json_encode($repo->all());
        }
        break;

    case 'POST':
        //  POST: Crear nuevo usuario

        // Validación básica: verificar si el campo 'nombre' está presente
        if ($input && isset($input['nombre'])) {
            $repo->save($input);
            echo json_encode(['message' => 'Usuario creado']);
        } else {
            echo json_encode(['error' => 'Datos inválidos']);
        }
        break;

    case 'DELETE':
        //  DELETE: Eliminar usuario por ID

        // Obtener variables del cuerpo usando parse_str
        parse_str(file_get_contents("php://input"), $delVars);

        // Validar si el ID está presente
        if (isset($delVars['id'])) {
            $repo->delete($delVars['id']);
            echo json_encode(['message' => 'Usuario eliminado']);
        } else {
            echo json_encode(['error' => 'ID requerido']);
        }
        break;

    default:
        //  Método HTTP no permitido
        http_response_code(405);
        echo json_encode(['error' => 'Método no permitido']);
        break;
}
?>

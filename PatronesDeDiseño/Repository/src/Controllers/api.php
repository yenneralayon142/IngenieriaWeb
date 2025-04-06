<?php
require_once __DIR__ . '/../Repositories/UserRepositoryInterface.php';
require_once __DIR__ . '/../Repositories/UserRepository.php';

header('Content-Type: application/json');
$method = $_SERVER['REQUEST_METHOD'];
$repo = new UserRepository();

// Obtener datos enviados por el cliente
$input = json_decode(file_get_contents('php://input'), true);

switch ($method) {
    case 'GET':
        if (isset($_GET['id'])) {
            $user = $repo->find($_GET['id']);
            echo json_encode($user ?? ['error' => 'Usuario no encontrado']);
        } else {
            echo json_encode($repo->all());
        }
        break;

    case 'POST':
        if ($input && isset($input['id']) && isset($input['name'])) {
            $repo->save($input);
            echo json_encode(['message' => 'Usuario creado']);
        } else {
            echo json_encode(['error' => 'Datos inválidos']);
        }
        break;

    case 'DELETE':
        parse_str(file_get_contents("php://input"), $delVars);
        if (isset($delVars['id'])) {
            $repo->delete($delVars['id']);
            echo json_encode(['message' => 'Usuario eliminado']);
        } else {
            echo json_encode(['error' => 'ID requerido']);
        }
        break;

    default:
        http_response_code(405);
        echo json_encode(['error' => 'Método no permitido']);
        break;
}

?>
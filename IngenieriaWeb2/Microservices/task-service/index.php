<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");


$tasks= [
    ['id' => 1, 'task' => 'Comprar leche'];
    ['id' => 2, 'task' => 'Estudiar para el examen'];
]

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    echo json_encode($tasks); 
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $data = json_decode(file_get_contents("php://input"), true);
}


?>
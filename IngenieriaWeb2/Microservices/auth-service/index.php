<?php

header("Content-type: application/json");
header("Access-Control-Allow-Origin");
header("Access-Control-Allow-Methods:POST");

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $data =json_decode(file_get_contents("php://input"),true)

    if($data['username'] === 'admin' && $data['password'] === '123'){
        echo json_encode(['status' => 1 , 'message' => 'abc1234'])
    } else {
        http_response_code(401);
        echo json_encode(['status' => 0 ,'error' => 'Credenciales invalidas'|])
    }
}



?>
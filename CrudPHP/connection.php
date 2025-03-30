<?php
function connection() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "users_crud_php";

    $connect = mysqli_connect($host, $user, $pass, $bd);

    if (!$connect) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    return $connect;
}
?>
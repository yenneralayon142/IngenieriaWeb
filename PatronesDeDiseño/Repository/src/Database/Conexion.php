<?php
class Conexion {
    public static function conectar() {
      return new PDO('mysql:host=localhost;dbname=users', 'root', '');
    }
  }
?>
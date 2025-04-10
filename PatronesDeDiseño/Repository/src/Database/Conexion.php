<?php
class Conexion {
    /**
     * 🔌 Establece una conexión con la base de datos MySQL mediante PDO.
     *
     * @return PDO Objeto de conexión PDO listo para ejecutar consultas.
     * @throws PDOException Si ocurre un error al intentar conectarse.
     */
    public static function conectar() {
        return new PDO('mysql:host=localhost;dbname=users', 'root', '');
    }
}
?>
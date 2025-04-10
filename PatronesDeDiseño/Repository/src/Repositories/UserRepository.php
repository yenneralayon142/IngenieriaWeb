<?php
    require_once 'UserRepositoryInterface.php';
    require_once '../Database/Conexion.php';

    class UserRepository implements UserRepositoryInterface {
        private $users = [];
        private $db;

        /**
         * Constructor de la clase UserRepository.
         * 
         * Inicializa la lista de usuarios y establece la conexión con la base de datos.
         */
        public function __construct()
        {
            // Lista interna de usuarios para pruebas
            $this->users = [
                1 => ['id' => 1, 'nombre' => 'Andres'],
                2 => ['id' => 2, 'nombre' => 'Yenner'],
                3 => ['id' => 3, 'nombre' => 'Stiven']
            ];
            // Conexión a la base de datos
            $this->db = Conexion::conectar();
        }

        /**
         * Busca un usuario por su ID.
         * 
         * Realiza una consulta en la base de datos para recuperar los datos del usuario.
         *
         * @param int $id El ID del usuario a buscar.
         * @return array|null Un arreglo asociativo con los datos del usuario o null si no se encuentra.
         */
        public function find($id)
        {
            $sql = "SELECT * FROM users WHERE id = ?";
            $stmt = $this->db->prepare($sql); 
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }    

        /**
         * Obtiene todos los usuarios almacenados en la base de datos.
         * 
         * Realiza una consulta para obtener todos los registros de la tabla `users`.
         *
         * @return array Un arreglo de usuarios, donde cada usuario es un arreglo asociativo.
         */
        public function all()
        {
            $sql = "SELECT * FROM users";
            $stmt = $this->db->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        /**
         * Guarda un usuario en la base de datos.
         * 
         * Inserta un nuevo usuario en la tabla `users` con el nombre proporcionado.
         *
         * @param array $user Un arreglo asociativo que representa los datos del usuario, por ejemplo: ['nombre' => 'Juan'].
         * @return void
         */
        public function save($user)
        {
            $sql = "INSERT INTO users (nombre) VALUES(?)";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$user['nombre']]); 
        }

        /**
         * Elimina un usuario por su ID.
         * 
         * Aunque en la implementación actual solo se elimina de la lista interna `$users`, en un caso real debería eliminarlo de la base de datos.
         *
         * @param int $id El ID del usuario a eliminar.
         * @return bool True si la operación fue exitosa.
         */
        public function delete($id)
        {
            unset($this->users[$id]);
            return true;
        }
    }
?>
<?php
    require_once 'UserRepositoryInterface.php';
    require_once '../Database/Conexion.php';
    
    class UserRepository implements UserRepositoryInterface {
        private $users = [];
        private $db;

        public function __construct()
        {
            $this->users = [
                1 => ['id' => 1, 'nombre' => 'Andres'],
                2 => ['id' => 2, 'nombre' => 'Yenner'],
                3 => ['id' => 3, 'nombre' => 'Stiven']
            ];
            $this->db = Conexion::conectar();
        }

        public function find($id){
            return $this->users[$id] ?? null;
        }

        public function all(){
            return array_values($this->users);
        }

        public function save($user) {
           $sql = "INSERT INTO users (id,nombre) VALUES(?,?)";
           $stmt = $this->db->prepare($sql);
           $stmt->execute([$user['id'], $user['nombre']]); 
        }

        public function delete($id){
            unset($this->users[$id]);
            return true;
        }
    }
?>
<?php
    require_once 'UserRepositoryInterface.php';
    require_once '../Database/Conexion.php';
    
    class UserRepository implements UserRepositoryInterface {
        private $users = [];
        private $db;

        public function __construct()
        {
            $this->users = [
                1 => ['id'> 1, 'nombre' => 'Andres'],
                2 => ['id' => 2, 'nombre' => 'Yenner'],
                3 => ['id' => 3, 'nombre' => 'Stiven'] 
            ];
            $this->db = Conexion::conectar();
        }

        public function find($id){
            $sql = "SELECT * FROM users WHERE id = ?";
            $stmt = $this->db->prepare($sql); 
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }    
        
        public function all(){
            $sql = "SELECT * FROM users";
            $stmt = $this->db->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function save($user) {
           $sql = "INSERT INTO users (nombre) VALUES(?)";
           $stmt = $this->db->prepare($sql);
           $stmt->execute([$user['nombre']]); 
        }

        public function delete($id){
            unset($this->users[$id]);
            return true;
        }
    }
?>